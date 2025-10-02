# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Statamic CMS** project - a flat-file, Laravel-powered content management system. Content is stored as markdown files with YAML front matter in the `content/` directory, and templates use the **Antlers templating engine** (`.antlers.html` files).

## Key Commands

### Development
```bash
composer dev        # Runs all services concurrently: server, queue, logs, vite
npm run dev         # Run Vite dev server only
php artisan serve   # Run Laravel server only
```

### Build & Deploy
```bash
npm run build       # Build production assets with Vite
```

### Testing
```bash
composer test       # Clears config and runs PHPUnit tests
```

### Code Quality
```bash
./vendor/bin/pint   # Format PHP code (Laravel Pint)
```

### Statamic CLI
```bash
php please          # Statamic's CLI tool (similar to artisan)
```

## Architecture

### Content Structure

Content is stored in flat files under `content/collections/`:
- `events/` - Event entries with date fields (`event_date_field.start`, `event_date_field.end`)
- `pages/` - Static pages
- `docs/` - Documentation entries
- `elements/` - Design system elements
- `demos/` - Demo content

Each collection has a YAML configuration file (e.g., `events.yaml`) that defines:
- Default template and layout
- Route patterns
- Taxonomies
- Date behavior (past/future visibility)

### View Structure

Views are in `resources/views/` using the Antlers templating language:

- **Layouts** (`layouts/`): Base HTML structure
  - `layout.antlers.html` - Main site layout with `{{ template_content }}` placeholder

- **Templates** (collection-specific folders like `events/`, `blog/`):
  - `index.antlers.html` - List/archive views
  - `show.antlers.html` - Individual entry views

- **Partials** (`partials/`): Reusable components
  - `bard/blocks/` - Content builder blocks (image, video, text, etc.)
  - `button/`, `card/`, `hero/` - UI components
  - `common/`, `mast/`, `footer/` - Layout sections

### Frontend Stack

- **CSS**: Tailwind CSS v4 with custom layers in `resources/css/`
  - `site.css` - Main stylesheet importing theme files from `app/`
  - Uses `@import "tailwindcss"` syntax

- **JavaScript**: Alpine.js with plugins (@collapse, @focus, @intersect, @morph)
  - Entry point: `resources/js/site.js`

- **Build Tool**: Vite (configured in `vite.config.js`)

### Antlers Templating Patterns

**Collections**:
```antlers
{{collection:events sort="field:asc" limit="10"}}
  {{ title }}
{{/collection:events}}
```

**Filtering by date**:
- Use `since` and `until` parameters with plain English (e.g., `since="january 1st"`, `until="december 31st next year"`)
- PHP's `strtotime` interprets these values
- For specific field filtering: `event_date_field:end >= "today"`

**Grouping**:
```antlers
{{events group_by="date_field:start|Y"}}
  {{ groups }}
    {{ group }} {{# Group label (e.g., year) #}}
    {{ items }}
      {{ title }}
    {{ /items }}
  {{ /groups }}
{{/events}}
```

**Partials**:
```antlers
{{partial:partials/component
  :dynamic_var="variable_name"
  static_var="literal value"
}}
```

**Variables**: Use `:` prefix for passing variables dynamically

### Entry Structure

Event entries (example from `content/collections/events/`):
```yaml
---
id: unique-id
blueprint: event
title: Event Name
event_description: Description
event_location: Location
event_date_field:
  start: 2025-09-30
  end: 2025-10-02
event_website: https://example.com
booth_number: "342"
categories: rail
---
```

## Development Workflow

1. **Content changes**: Edit markdown files in `content/collections/`
2. **Template changes**: Edit `.antlers.html` files in `resources/views/`
3. **Styling changes**: Modify CSS in `resources/css/app/` (automatically imported via `site.css`)
4. **Running the site**: Use `composer dev` to start all services, or `npm run dev` + `php artisan serve` separately

## Important Notes

- Statamic is **flat-file first** - no database required for content (though Laravel database features are available)
- Control Panel: Access via `/cp` route
- Cache clearing: Use `php please cache:clear` or `php artisan cache:clear`
- When filtering collections by date fields, prefer Antlers' built-in `since`/`until` parameters over complex date comparisons

<?php

use Illuminate\Support\Facades\Route;

// The Sitemap route to the sitemap.xml
Route::statamic('/sitemap.xml', 'sitemap/sitemap', [
    'layout' => null,
    'content_type' => 'application/xml'
]);

Route::statamic('/unsupported-browser', 'ie/unsupported-browser', [
    'layout' => null
]);

// If not logged in when trying to view /docs or /elements
Route::statamic('/login', 'docs/login-message', [
    'layout' => 'docs/layouts/login',
]);


// Custom routes needed for Docs Collection
// These pages don't exist in the CMS
// Route::statamic('/docs', 'docs/index', [
//     'layout' => 'layouts/triple',
//     'title' => 'Statamic CMS Tutorials',
//     'intro' => 'Bite-sized guides to get you started with Statamic CMS.',
//     'segment_1_title' => 'Docs',
//     'cms_bard_basic' => 'Quick guides to get the most out of your website'
// ]);

// Docs Taxonomy Index
// Route::statamic('/docs/guides', 'docs/guides/index', [
//     'layout' => 'layouts/triple',
// ]);
// /docs/guides/{slug}
// Route makes the collection CATEGORY TERMS pages work
Route::statamic('/docs/guides/{slug}', 'docs/guides/show', [
    'layout' => 'docs/layouts/triple-2-8-2',
]);

Route::redirect('/docs/guides', '/docs');



Route::statamic('authors', 'users.index', [
    'layout' => 'users/layout'
]);
Route::statamic('authors/{slug}', 'users.show', [
    'layout' => 'users/layout'
]);



// Sets layout for blog category pages
// {{ variables }} break when using this
// Route::statamic('blog/categories/{slug}', 'blog.categories.show', [
//     'layout' => 'blog/layout'
// ]);


// Route::statamic('blog/categories', 'blog.categories.index', [
//     'layout' => 'blog/layout'
// ]);


// Route::statamic('elements/{slug}', 'elements/show', [
//     'layout' => 'elements/layouts/_triple',
    
// ]);

// Route::statamic('/elements', 'elements/index', [
//     'layout' => 'elements/layouts/_triple',
// ]);


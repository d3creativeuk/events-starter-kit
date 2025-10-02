<?php

return [

    'image_manipulation' => [

        /*
        |--------------------------------------------------------------------------
        | Route Prefix
        |--------------------------------------------------------------------------
        |
        | The route prefix for serving HTTP based manipulated images through Glide.
        | If using the cached option, this should be the URL of the cached path.
        |
        */

        'route' => 'img',

        /*
        |--------------------------------------------------------------------------
        | Require Glide security token
        |--------------------------------------------------------------------------
        |
        | With this option enabled, you are protecting your website from mass image
        | resize attacks. You will need to generate tokens using the Glide tag
        | but may want to disable this while in development to tinker.
        |
        */

        'secure' => true,

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Driver
        |--------------------------------------------------------------------------
        |
        | The driver that will be used under the hood for image manipulation.
        | Supported: "gd" or "imagick" (if installed on your server)
        |
        */

        'driver' => 'gd',

        /*
        |--------------------------------------------------------------------------
        | Additional Image Extensions
        |--------------------------------------------------------------------------
        |
        | Define any additional image file extensions you would like Statamic to
        | process. You should ensure that both your server and the selected
        | image manipulation driver properly supports these extensions.
        |
        */

        'additional_extensions' => [
            // 'heic',
        ],

        /*
        |--------------------------------------------------------------------------
        | Save Cached Images
        |--------------------------------------------------------------------------
        |
        | Enabling this will make Glide save publicly accessible images. It will
        | increase performance at the cost of the dynamic nature of HTTP based
        | image manipulation. You will need to invalidate images manually.
        |
        */

        'cache' => true,
        'cache_path' => public_path('img'),

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Defaults
        |--------------------------------------------------------------------------
        |
        | You may define global defaults for all manipulation parameters, such as
        | quality, format, and sharpness. These can and will be be overwritten
        | on the tag parameter level as well as the preset level.
        |
        */

        'defaults' => [
            // 'quality' => 50,
        ],

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Presets
        |--------------------------------------------------------------------------
        |
        | Rather than specifying your manipulation params in your templates with
        | the glide tag, you may define them here and reference their handles.
        | They may also be automatically generated when you upload assets.
        | Containers can be configured to warm these caches on upload.
        |
        */

        'presets' => [
            // 'small' => ['w' => 200, 'h' => 200, 'q' => 75, 'fit' => 'crop'],
            'max_upload_size' => ['w' => 2000, 'h' => 2000, 'fit' => 'max'],
            // Facebook OG - jpg
            'w1200_h630' => ['w' => 1200, 'h' => 630, 'q' => 75, 'fit' => 'crop_focal'],
            // Twitter OG -jpg
            'w1024_h512' => ['w' => 1024, 'h' => 512, 'q' => 75, 'fit' => 'crop_focal'],
    
            // Used for JSON-LD - Google Structured data
            // 16:9 - w1280-h720 - wide
            // 4:3 - w1280-h960 - classic
            // 1:1 - w1280-h1280 - square
    
            // Each image is reduced by 15%
            // https://docs.google.com/spreadsheets/d/1hKyp_JMHko4Z74pqJkZAiLcD4rNkSU5_-WNFv1NEeqI/edit#gid=0
    
            // 4:3 - classic - webp
            'w2000_classic' => ['w' => 2000, 'h' => 1500, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1700_classic' => ['w' => 1700, 'h' => 1275, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1445_classic' => ['w' => 1445, 'h' => 1084, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1228_classic' => ['w' => 1228, 'h' => 921, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1044_classic' => ['w' => 1044, 'h' => 783, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w887_classic' => ['w' => 887, 'h' => 666, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w754_classic' => ['w' => 754, 'h' => 566, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w641_classic' => ['w' => 641, 'h' => 481, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w545_classic' => ['w' => 545, 'h' => 409, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w463_classic' => ['w' => 463, 'h' => 374, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w394_classic' => ['w' => 394, 'h' => 295, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w335_classic' => ['w' => 335, 'h' => 251, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w284_classic' => ['w' => 284, 'h' => 213, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w242_classic' => ['w' => 242, 'h' => 181, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w206_classic' => ['w' => 206, 'h' => 154, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w175_classic' => ['w' => 175, 'h' => 131, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w149_classic' => ['w' => 149, 'h' => 111, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w126_classic' => ['w' => 126, 'h' => 95, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w107_classic' => ['w' => 107, 'h' => 80, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w91_classic' => ['w' => 91, 'h' => 68, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w78_classic' => ['w' => 78, 'h' => 58, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w66_classic' => ['w' => 66, 'h' => 49, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
    
             // 21:9 - ultrawide - webp
             'w2000_ultrawide' => ['w' => 2000, 'h' => 844, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w1700_ultrawide' => ['w' => 1700, 'h' => 717, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w1445_ultrawide' => ['w' => 1445, 'h' => 610, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w1228_ultrawide' => ['w' => 1228, 'h' => 518, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w1044_ultrawide' => ['w' => 1044, 'h' => 441, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w887_ultrawide' => ['w' => 887, 'h' => 374, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w754_ultrawide' => ['w' => 754, 'h' => 318, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w641_ultrawide' => ['w' => 641, 'h' => 271, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w545_ultrawide' => ['w' => 545, 'h' => 230, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w463_ultrawide' => ['w' => 463, 'h' => 195, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w394_ultrawide' => ['w' => 394, 'h' => 166, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w335_ultrawide' => ['w' => 335, 'h' => 141, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w284_ultrawide' => ['w' => 284, 'h' => 120, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w242_ultrawide' => ['w' => 242, 'h' => 102, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w206_ultrawide' => ['w' => 206, 'h' => 87, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w175_ultrawide' => ['w' => 175, 'h' => 74, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w149_ultrawide' => ['w' => 149, 'h' => 63, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w126_ultrawide' => ['w' => 126, 'h' => 53, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w107_ultrawide' => ['w' => 107, 'h' => 45, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w91_ultrawide' => ['w' => 91, 'h' => 38, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w78_ultrawide' => ['w' => 78, 'h' => 33, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
             'w66_ultrawide' => ['w' => 66, 'h' => 28, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
    
            // 16:9 - wide - webp
            'w2000_wide' => ['w' => 2000, 'h' => 1125, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1700_wide' => ['w' => 1700, 'h' => 956, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1445_wide' => ['w' => 1445, 'h' => 813, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1228_wide' => ['w' => 1228, 'h' => 691, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1044_wide' => ['w' => 1044, 'h' => 587, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w887_wide' => ['w' => 887, 'h' => 499, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w754_wide' => ['w' => 754, 'h' => 424, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w641_wide' => ['w' => 641, 'h' => 361, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w545_wide' => ['w' => 545, 'h' => 307, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w463_wide' => ['w' => 463, 'h' => 261, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w394_wide' => ['w' => 394, 'h' => 221, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w335_wide' => ['w' => 335, 'h' => 188, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w284_wide' => ['w' => 284, 'h' => 160, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w242_wide' => ['w' => 242, 'h' => 136, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w206_wide' => ['w' => 206, 'h' => 116, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w175_wide' => ['w' => 175, 'h' => 98, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w149_wide' => ['w' => 149, 'h' => 84, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w126_wide' => ['w' => 126, 'h' => 95, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w107_wide' => ['w' => 107, 'h' => 60, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w91_wide' => ['w' => 91, 'h' => 51, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w78_wide' => ['w' => 78, 'h' => 44, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w66_wide' => ['w' => 66, 'h' => 37, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
    
            // 1:1 - square - webp
            'w2000_square' => ['w' => 2000, 'h' => 2000, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1700_square' => ['w' => 1700, 'h' => 1700, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1445_square' => ['w' => 1445, 'h' => 1445, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1228_square' => ['w' => 1228, 'h' => 1228, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w1044_square' => ['w' => 1044, 'h' => 1044, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w887_square' => ['w' => 887, 'h' => 887, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w754_square' => ['w' => 754, 'h' => 754, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w641_square' => ['w' => 641, 'h' => 641, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w545_square' => ['w' => 545, 'h' => 545, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w463_square' => ['w' => 463, 'h' => 463, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w394_square' => ['w' => 394, 'h' => 394, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w335_square' => ['w' => 335, 'h' => 335, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w284_square' => ['w' => 284, 'h' => 284, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w242_square' => ['w' => 242, 'h' => 242, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w206_square' => ['w' => 206, 'h' => 206, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w175_square' => ['w' => 175, 'h' => 175, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w149_square' => ['w' => 149, 'h' => 149, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w126_square' => ['w' => 126, 'h' => 126, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w107_square' => ['w' => 107, 'h' => 107, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w91_square' => ['w' => 91, 'h' => 91, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w78_square' => ['w' => 78, 'h' => 78, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
            'w66_square' => ['w' => 66, 'h' => 66, 'q' => 75, 'fm' => 'webp', 'fit' => 'crop_focal'], 
    
            // no_crop - no_crop - webp
            'w2000_no_crop' => ['w' => 2000, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w1700_no_crop' => ['w' => 1700, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w1445_no_crop' => ['w' => 1445, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w1228_no_crop' => ['w' => 1228, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w1044_no_crop' => ['w' => 1044, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w887_no_crop' => ['w' => 887, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w754_no_crop' => ['w' => 754, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w641_no_crop' => ['w' => 641, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w545_no_crop' => ['w' => 545, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w463_no_crop' => ['w' => 463, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w394_no_crop' => ['w' => 394, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w335_no_crop' => ['w' => 335, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w284_no_crop' => ['w' => 284, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w242_no_crop' => ['w' => 242, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w206_no_crop' => ['w' => 206, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w175_no_crop' => ['w' => 175, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w149_no_crop' => ['w' => 149, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w126_no_crop' => ['w' => 126, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w107_no_crop' => ['w' => 107, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w91_no_crop' => ['w' => 91, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w78_no_crop' => ['w' => 78, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
            'w66_no_crop' => ['w' => 66, 'q' => 75, 'fm' => 'webp', 'fit' => 'contain'], 
        ],

        /*
        |--------------------------------------------------------------------------
        | Generate Image Manipulation Presets on Upload
        |--------------------------------------------------------------------------
        |
        | By default, presets will be automatically generated on upload, ensuring
        | the cached images are available when they are first used. You may opt
        | out of this behavior here and have the presets generated on demand.
        |
        */

        'generate_presets_on_upload' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Auto-Crop Assets
    |--------------------------------------------------------------------------
    |
    | Enabling this will make Glide automatically crop assets at their focal
    | point (which is the center if no focal point is defined). Otherwise,
    | you will need to manually add any crop related parameters.
    |
    */

    'auto_crop' => true,

    /*
    |--------------------------------------------------------------------------
    | Control Panel Thumbnail Restrictions
    |--------------------------------------------------------------------------
    |
    | Thumbnails will not be generated for any assets any larger (in either
    | axis) than the values listed below. This helps prevent memory usage
    | issues out of the box. You may increase or decrease as necessary.
    |
    */

    'thumbnails' => [
        'max_width' => 10000,
        'max_height' => 10000,
    ],

    /*
    |--------------------------------------------------------------------------
    | File Previews with Google Docs
    |--------------------------------------------------------------------------
    |
    | Filetypes that cannot be rendered with HTML5 can opt into the Google Docs
    | Viewer. Google will get temporary access to these files so keep that in
    | mind for any privacy implications: https://policies.google.com/privacy
    |
    */

    'google_docs_viewer' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache Metadata
    |--------------------------------------------------------------------------
    |
    | Asset metadata (filesize, dimensions, custom data, etc) will get cached
    | to optimize performance, so that it will not need to be constantly
    | re-evaluated from disk. You may disable this option if you are
    | planning to continually modify the same asset repeatedly.
    |
    */

    'cache_meta' => true,

    /*
    |--------------------------------------------------------------------------
    | Focal Point Editor
    |--------------------------------------------------------------------------
    |
    | When editing images in the Control Panel, there is an option to choose
    | a focal point. When working with third-party image providers such as
    | Cloudinary it can be useful to disable Statamic's built-in editor.
    |
    */

    'focal_point_editor' => true,

    /*
    |--------------------------------------------------------------------------
    | Enforce Lowercase Filenames
    |--------------------------------------------------------------------------
    |
    | Control whether asset filenames will be converted to lowercase when
    | uploading and renaming. This can help you avoid file conflicts
    | when working in case-insensitive filesystem environments.
    |
    */

    'lowercase' => true,

    /*
    |--------------------------------------------------------------------------
    | Additional Uploadable Extensions
    |--------------------------------------------------------------------------
    |
    | Statamic will only allow uploads of certain approved file extensions.
    | If you need to allow more file extensions, you may add them here.
    |
    */

    'additional_uploadable_extensions' => [],

    /*
    |--------------------------------------------------------------------------
    | SVG Sanitization
    |--------------------------------------------------------------------------
    |
    | Statamic will automatically sanitize SVG files when uploaded to avoid
    | potential security issues. However, if you have a valid reason for
    | disabling this, and you trust your users, you may do so here.
    |
    */

    'svg_sanitization_on_upload' => true,

];

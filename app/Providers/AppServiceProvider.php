<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;
use Statamic\Facades\CP\Nav;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        \Statamic\Tags\Svg::disableSanitization();

        // Statamic::vite('app', [            
        //     'resources/css/cp.css',
        // ]);

        Statamic::vite('app', [
            'hotFile' => __DIR__.'/../../public/hot-cp',
            'buildDirectory' => 'build-cp',
            'input' => [
                'resources/css/cp.css',
            ],
        ]);
    

        Nav::extend(function ($nav) {
            $nav->remove('Top Level', 'Dashboard');
        });
    }
}

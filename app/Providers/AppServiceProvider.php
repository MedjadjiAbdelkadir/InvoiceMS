<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('layouts.master', function ($view) {
        //     $theme = \Cookie::get('theme');
        //     // dd($theme);
        //     if ($theme != 'dark' && $theme != 'light') {
        //         $theme = 'light';
        //     }
        
        //     $view->with('theme', $theme);
        // });
    }
}

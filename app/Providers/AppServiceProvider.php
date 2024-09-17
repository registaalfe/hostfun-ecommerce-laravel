<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
    public function boot()
    {
        Blade::component('components.admin.header', 'header');
        Blade::component('components.admin.layout', 'layout');
        Blade::component('components.admin.side-bar', 'sidebar');
    }
}

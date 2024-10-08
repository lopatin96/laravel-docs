<?php

namespace Atin\LaravelDocs;

use Illuminate\Support\ServiceProvider;

class DocsProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-docs');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-docs');

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-docs');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-docs')
        ], 'laravel-docs-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-docs'),
        ], 'laravel-docs-lang');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-docs.php')
        ], 'laravel-docs-config');
    }
}
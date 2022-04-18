<?php

namespace TheRiptide\LaravelDashboardComponents;

use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadViewsFrom(__DIR__.'/../views', 'dascom');

        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/dascom'),
        ]);
    }

    public function register() {


    }

}
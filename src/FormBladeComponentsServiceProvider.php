<?php

namespace Mydnic\FormBladeComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class FormBladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerBladeComponents();
    }

    private function registerBladeComponents()
    {
        Blade::component('components.form.input', 'input');
        Blade::component('components.form.textarea', 'textarea');
        Blade::component('components.form.select', 'select');
        Blade::component('components.form.checkbox', 'checkbox');
    }

    public function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components'),
        ], 'blade-components');
    }
}

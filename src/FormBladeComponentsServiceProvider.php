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
    }

    public function boot()
    {
        $this->registerBladeComponents();
    }

    private function registerBladeComponents()
    {
        Blade::aliasComponent('components.form.input', 'input');
        Blade::aliasComponent('components.form.textarea', 'textarea');
        Blade::aliasComponent('components.form.select', 'select');
        Blade::aliasComponent('components.form.checkbox', 'checkbox');
    }

    public function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components'),
        ], 'blade-components');
    }
}

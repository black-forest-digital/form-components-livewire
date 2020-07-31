<?php

namespace Bfd\FormComonentLivewire;

use Bfd\FormComonentLivewire\Commands\FormComonentLivewireCommand;
use Illuminate\Support\ServiceProvider;

class FormComonentLivewireServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // $this->publishes([
            //     __DIR__.'/../config/FormComonentsLivewire.php' => config_path('FormComonentsLivewire.php'),
            // ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/FormComonentsLivewire'),
            ], 'views');

            // if (! class_exists('CreatePackageTable')) {
            //     $this->publishes([
            //         __DIR__ . '/../database/migrations/create_FormComonentsLivewire_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_FormComonentsLivewire_table.php'),
            //     ], 'migrations');
            // }

            // $this->commands([
            //     FormComonentLivewireCommand::class,
            // ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'FormComonentsLivewire');
    }

    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/FormComonentsLivewire.php', 'FormComonentsLivewire');
    }
}

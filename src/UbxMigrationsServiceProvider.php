<?php

namespace Ubxmigrations;

use Illuminate\Support\ServiceProvider;
use Ubxmigrations\Commands\MakeUbxMigration;

class UbxMigrationsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/ubxmigrations.php', 'ubxmigrations'
        );
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeUbxMigration::class
            ]);
            
            $this->publishes([
                __DIR__.'/../stubs' => base_path('stubs/ubxmigrations'),
            ], 'ubxmigrations-stubs');
        }
    }
}

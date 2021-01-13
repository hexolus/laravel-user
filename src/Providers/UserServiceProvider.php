<?php

namespace Hexolus\Laravel\User\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class UserServiceProvider extends LaravelServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__ . '/../../config/user.php' => config_path('user.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/user.php',
            'user'
        );

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}

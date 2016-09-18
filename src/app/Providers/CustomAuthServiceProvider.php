<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['auth']->provider('custom', function($app, $config) {
            return new CustomUserProvider($app['hash'], $config['model']);
        });
    }
}

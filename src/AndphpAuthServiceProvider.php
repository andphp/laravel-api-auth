<?php

namespace AndPHP\LaravelApiAuth;

use Illuminate\Support\ServiceProvider;

class AndphpAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/andphp_jwt.php' => config_path('jwt.php'),
        ]);
    }
}

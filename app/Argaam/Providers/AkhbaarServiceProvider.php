<?php

namespace App\Argaam\Providers;

use App\Argaam\AkhbaarClient;
use Illuminate\Support\ServiceProvider;

class AkhbaarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AkhbaarClient::class, function () {
            return new AkhbaarClient(config('services.argaam.akhbaar'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Argaam\Providers;

use App\Argaam\SsoClient;
use Illuminate\Support\ServiceProvider;

class SsoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SsoClient::class, function () {
            return new SsoClient(config('services.argaam.sso'));
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

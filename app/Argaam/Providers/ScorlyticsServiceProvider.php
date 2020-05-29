<?php

namespace App\Argaam\Providers;

use App\Argaam\ScorlyticsClient;
use Illuminate\Support\ServiceProvider;

class ScorlyticsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ScorlyticsClient::class, function () {
            return new ScorlyticsClient(config('services.argaam.scorlytics'));
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

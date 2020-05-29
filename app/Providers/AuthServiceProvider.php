<?php

namespace App\Providers;

use App\Argaam\Auth\SsoGuard;
use App\Argaam\Auth\SsoUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // SSO user provider.
        Auth::provider('sso_users', function () {
            return new SsoUserProvider();
        });

        // SSO guard.
        Auth::extend('sso', function ($app, $name, array $config) {
            return new SsoGuard(Auth::createUserProvider($config['provider']));
        });
    }
}

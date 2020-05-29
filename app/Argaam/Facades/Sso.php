<?php

namespace App\Argaam\Facades;

use App\Argaam\SsoClient;
use Illuminate\Support\Facades\Facade;

/**
 * @method static authenticate(string $email, string $password)
 * @method static user(\Illuminate\Session\Store $session)
 * @method static register(array $attributes)
 */
class Sso extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SsoClient::class;
    }
}

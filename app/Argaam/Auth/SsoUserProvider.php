<?php

namespace App\Argaam\Auth;

use App\Argaam\Facades\Sso;
use App\SsoUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class SsoUserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {
        // TODO: Implement retrieveById() method.
    }

    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials)) {
            return null;
        }

        try {
            $attributes = Sso::authenticate($credentials['email'], $credentials['password']);

            if (is_null($attributes)) {
                return null;
            }

            return new SsoUser($attributes);
        } catch (\Throwable $e) {
            return null;
        }
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
    }
}

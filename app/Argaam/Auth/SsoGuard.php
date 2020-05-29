<?php

namespace App\Argaam\Auth;

use App\SsoUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;

class SsoGuard implements Guard
{
    /**
     * SsoUserProvider.
     *
     * @var UserProvider
     */
    protected $provider;

    /**
     * User.
     */
    protected $user;

    /**
     * SsoGuard constructor.
     *
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     */
    public function __construct(UserProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Attempt login.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function attempt(array $credentials = [])
    {
        $user = $this->provider->retrieveByCredentials($credentials);

        if ($user instanceof SsoUser) {
            $this->setUser($user);

            return true;
        }

        return false;
    }

    /**
     * Login.
     *
     * @param  Authenticatable  $user
     */
    public function login(Authenticatable $user)
    {
        $this->setUser($user);
    }

    /**
     * Logout.
     */
    public function logout()
    {
        $this->user = null;

        session()->forget(['api_token', 'user']);
    }

    /**
     * Check auth.
     *
     * @return bool
     */
    public function check()
    {
        return session()->has('user');
    }

    /**
     * Check guest.
     *
     * @return bool
     */
    public function guest()
    {
        return ! $this->check();
    }

    /**
     * Auth user.
     *
     * @return Authenticatable
     */
    public function user()
    {
        return session('user');
    }

    /**
     * Auth id.
     *
     * @return int|null
     */
    public function id()
    {
        return $this->user->id ?? null;
    }

    public function validate(array $credentials = [])
    {
        // TODO: Implement validate() method.
    }

    /**
     * Set user.
     *
     * @param  Authenticatable  $user
     * @return $this|void
     */
    public function setUser(Authenticatable $user)
    {
        $this->user = $user;

        session()->put([
            'api_token', $user->apiToken(),
            'user' => $user
        ]);

        return $this;
    }
}

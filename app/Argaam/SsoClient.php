<?php

namespace App\Argaam;

use App\SsoUser;
use Illuminate\Support\Facades\Http;

class SsoClient
{
    /**
     * API endpoint.
     *
     * @var mixed
     */
    protected $endpoint;

    /**
     * Headers.
     *
     * @var array
     */
    protected $headers = [];

    /**
     * SsoClient constructor.
     *
     * @param  $config
     */
    public function __construct($config)
    {
        $this->endpoint = $config['endpoint'];

        $this->headers = [
            'X-Argaam-App' => $config['app']
        ];
    }

    /**
     * Authenticate by credentials.
     *
     * @param  $email
     * @param  $password
     * @return array
     */
    public function authenticate($email, $password)
    {
        $response = Http::withHeaders($this->headers)
            ->acceptJson()
            ->post($this->endpoint . '/auth/login', compact('email', 'password'));

        if ($response->ok()) {
            return $response->json();
        }

        return null;
    }

    /**
     * Register.
     *
     * @param $attributes
     * @return SsoUser|array|null
     */
    public function register($attributes)
    {
        $name = $attributes['name'];
        $email = $attributes['email'];
        $password = $attributes['password'];
        $password_confirmation = $attributes['password'];

        $response = Http::withHeaders($this->headers)
            ->acceptJson()
            ->post($this->endpoint . '/auth/register', compact('name', 'email', 'password', 'password_confirmation'));

        if ($response->ok()) {
            return new SsoUser($response->json());
        } elseif ($response->status() === 422) {
            return $response->json()['errors'];
        }

        return null;
    }

    /**
     * Get user.
     *
     * @param $token
     * @return array|null
     */
    public function user($token)
    {
        $response = Http::withHeaders($this->headers)
            ->withToken($token)
            ->acceptJson()
            ->get($this->endpoint . '/auth/user');

        if ($response->ok()) {
            return json_decode(json_encode($response->json()['data']));
        }

        return null;
    }
}

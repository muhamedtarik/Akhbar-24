<?php

namespace App;

use Illuminate\Foundation\Auth\User as BaseUser;

class SsoUser extends BaseUser
{
    /**
     * User attributes.
     *
     * @var array
     */
    public $attributes;

    /**
     * Api token.
     *
     * @var string
     */
    protected $token;

    /**
     * SsoUser constructor.
     *
     * @param $attributes
     */
    public function __construct($attributes)
    {
        parent::__construct();

        $this->attributes = $attributes['user'];
        $this->token = $attributes['access_token'];
    }

    /**
     * Api token.
     *
     * @return mixed|string
     */
    public function apiToken()
    {
        return $this->token;
    }
}

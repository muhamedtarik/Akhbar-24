<?php

namespace App\Argaam\Facades;

use App\Argaam\ScorlyticsClient;
use Illuminate\Support\Facades\Facade;

/**
 * @method static currentMatches()
 * @method static seasonStanding($seasonId)
 */
class Scorlytics extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ScorlyticsClient::class;
    }
}

<?php

namespace App\Argaam\Facades;

use App\Argaam\AkhbaarClient;
use Illuminate\Support\Facades\Facade;

/**
 * @method static newsFeaturedItems()
 * @method static sportFeaturedItems()
 * @method static newsHomelistedItems()
 * @method static sportHomelistedItems()
 * @method static category(string $site, string $slug, $page = 1, $perPage = 10)
 * @method static item($id)
 * @method static editor($id)
 * @method static relatedItems($id, int $page = 1)
 * @method static searchByTag(string $slug, $page = 1)
 * @method static search($slug, $keyword, $type = null, $page = 1)
 * @method static mostReadAndCommented($type, $site)
 */
class Akhbaar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AkhbaarClient::class;
    }
}

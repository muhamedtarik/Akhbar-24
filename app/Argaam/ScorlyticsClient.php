<?php

namespace App\Argaam;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ScorlyticsClient
{
    /**
     * API endpoint.
     *
     * @var mixed
     */
    protected $endpoint;

    /**
     * API key.
     *
     * @var mixed
     */
    protected $apiKey;

    /**
     * ScorlyticsClient constructor.
     *
     * @param $config
     */
    public function __construct($config)
    {
        $this->endpoint = $config['endpoint'];
        $this->apiKey = $config['key'];
    }

    /**
     * Current matches..
     *
     * @return array|bool
     */
    public function currentMatches()
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->endpoint . '/matches/current');

        if ($response->successful()) {
            return $response->json();
        }

        Log::error('Scorlytics API Error: ' . $response->body());

        return false;
    }

    /**
     * Season standing.
     *
     * @return array|bool
     */
    public function competitions()
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->endpoint . '/competitions');

        if ($response->successful()) {
            return $response->json()['data'];
        }

        Log::error('Scorlytics API Error: ' . $response->body());

        return false;
    }

    /**
     * Season standing.
     *
     * @param $seasonId
     * @return array|bool
     */
    public function seasonStanding($seasonId)
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->endpoint . '/seasons/' . $seasonId);

        if ($response->successful()) {
            return $response->json();
        }

        Log::error('Scorlytics API Error: ' . $response->body());

        return false;
    }
}

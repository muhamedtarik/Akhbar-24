<?php

namespace App\Argaam;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AkhbaarClient
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
     * Public api headers.
     *
     * @var array
     */
    protected $headers;

    /**
     * AkhbaarClient constructor.
     *
     * @param  $config
     */
    public function __construct($config)
    {
        $this->endpoint = $config['endpoint'];
        $this->apiKey = $config['key'];

        $this->headers = [
            'X-Authorization' => $this->apiKey,
            'platform' => 'web'
        ];
    }


    /**
     * Akhbaar24 featured items (top 3).
     *
     * @return array
     */
    public function newsFeaturedItems()
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . '/items/akhbaar24/featured');

        if ($response->successful()) {
            return array_splice($response->json()['data'], 0, 3);
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Sport24 featured items (top 3).
     *
     * @return array
     */
    public function sportFeaturedItems()
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . '/items/sport24/featured');

        if ($response->successful()) {
            return array_splice($response->json()['data'], 0, 3);
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24 homelisted items (top 60).
     *
     * @return array
     */
    public function newsHomelistedItems()
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . '/items/akhbaar24/home');

        if ($response->successful()) {
            return $response->json();
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Sport24 homelisted items (top 60).
     *
     * @return array
     */
    public function sportHomelistedItems()
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . '/items/sport24/home');

        if ($response->successful()) {
            return $response->json();
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24/Sport24 category.
     *
     * @param  $site
     * @param  $slug
     * @param  int  $page
     * @param  int  $perPage
     * @return array
     */
    public function category($site, $slug, $page = 1, $perPage = 10)
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/items/${site}/${slug}", [
                'page' => $page,
                'perpage' => $perPage
            ]);

        if ($response->successful()) {
            return $response->json();
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24/Sport24 single item.
     *
     * @param  $id
     * @return array
     */
    public function item($id)
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/items/${id}");

        if ($response->successful()) {
            return $response->json()['data'];
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Related items.
     *
     * @param  $id
     * @param  int  $page
     * @return array
     */
    public function relatedItems($id, $page = 1)
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/related-items/${id}", [
                'page' => $page
            ]);

        if ($response->successful()) {
            return $response->json();
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24/Sport24 search.
     *
     * @param  string  $slug
     * @param  string  $keyword
     * @param  null  $type
     * @param  int  $page
     * @return array
     */
    public function search($slug, $keyword, $type = null, $page = 1)
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/search", [
                $slug => $keyword,
                'type' => $type,
                'page' => $page
            ]);

        if ($response->successful()) {
            return $response->json();
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24/Sport24 editor profile.
     *
     * @param  int  $id
     * @return array
     */
    public function editor($id)
    {
        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/editors/${id}");

        if ($response->successful()) {
            return $response->json()['data'];
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }

    /**
     * Akhbaar24/Sport24 most read and commented items.
     *
     * @param  string  $type
     * @param  string  $site
     * @return array
     * @throws \Exception
     */
    public function mostReadAndCommented($type, $site)
    {
        if (!in_array($type, ['most-reads', 'most-comments']) or !in_array($site, ['akhbaar24', 'sport24'])) {
            throw new \Exception('Unsupported arguments');
        }

        $response = Http::withHeaders($this->headers)
            ->get($this->endpoint . "/items/${site}/${type}");

        if ($response->successful()) {
            return $response->json()['data'];
        }

        Log::info('Akhbaar24 API Error: ' . $response->body());
    }
}

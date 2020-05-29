<?php

namespace Tests\Feature\Api;

use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AkhbaarClientTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function client_can_get_news_featured_items()
    {
        $items = collect(range(1, 3))->map(function ($id){
            return [
                'id' => $id,
                'title' => $this->faker->sentence
            ];
        });

        Akhbaar::shouldReceive('newsFeaturedItems')->andReturn($items);

        $items = Akhbaar::newsFeaturedItems();

        $this->assertCount(3, $items);
    }

    /** @test */
    public function client_can_get_sport_featured_items()
    {
        $items = collect(range(1, 3))->map(function ($id){
            return [
                'id' => $id,
                'title' => $this->faker->sentence
            ];
        });

        Akhbaar::shouldReceive('sportFeaturedItems')->andReturn($items);

        $items = Akhbaar::sportFeaturedItems();

        $this->assertCount(3, $items);
    }

    /** @test */
    public function client_can_get_news_homelisted_items()
    {
        $response = [
            'data' => [],
            'meta' => [],
            'links' => []
        ];

        Akhbaar::shouldReceive('newsHomelistedItems')->andReturn($response);

        $response = Akhbaar::newsHomelistedItems();

        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('meta', $response);
        $this->assertArrayHasKey('links', $response);
    }

    /** @test */
    public function client_can_get_sport_homelisted_items()
    {
        $response = [
            'data' => [],
            'meta' => [],
            'links' => []
        ];

        Akhbaar::shouldReceive('sportHomelistedItems')->andReturn($response);

        $response = Akhbaar::sportHomelistedItems();

        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('meta', $response);
        $this->assertArrayHasKey('links', $response);
    }

    /** @test */
    public function client_can_get_news_item_by_id()
    {
        $response = [
            'id' => 1,
            'title' => $this->faker->sentence
        ];

        Akhbaar::shouldReceive('item')->andReturn($response);

        $item = Akhbaar::item($response['id']);

        $this->assertEquals($response['id'], $item['id']);
    }

    /** @test */
    public function client_can_get_related_items()
    {
        $response = [
            'data' => [],
            'meta' => [],
            'links' => []
        ];

        Akhbaar::shouldReceive('relatedItems')->andReturn($response);

        $response = Akhbaar::relatedItems(1);

        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('meta', $response);
        $this->assertArrayHasKey('links', $response);
    }

    /** @test */
    public function client_can_get_news_categories_by_slug()
    {
        $site = 'akhbaar24';
        $slugs = [
            'miscellaneous',
            'international',
            'accidents',
            'videos24',
            'galleries24'
        ];

        $response = [
            'data' => [],
            'meta' => [],
            'links' => []
        ];

        Akhbaar::shouldReceive('category')->andReturn($response);

        collect($slugs)->each(function ($slug) use ($site) {
            $response = Akhbaar::category($site, $slug);

            $this->assertArrayHasKey('data', $response);
            $this->assertArrayHasKey('meta', $response);
            $this->assertArrayHasKey('links', $response);
        });
    }

    /** @test */
    public function client_can_get_sports_categories_by_slug()
    {
        $site = 'sport24';
        $slugs = [
            'goals',
            'clips'
        ];

        $response = [
            'data' => [],
            'meta' => [],
            'links' => []
        ];

        Akhbaar::shouldReceive('category')->andReturn($response);

        collect($slugs)->each(function ($slug) use ($site) {
            $response = Akhbaar::category($site, $slug);

            $this->assertArrayHasKey('data', $response);
            $this->assertArrayHasKey('meta', $response);
            $this->assertArrayHasKey('links', $response);
        });
    }
}

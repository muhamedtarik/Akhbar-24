<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /** @test */
    public function user_can_browse_news_categories()
    {
        $site = 'akhbaar24';
        $slugs = [
            'miscellaneous',
            'international',
            'accidents',
            'videos24',
            'galleries24'
        ];

        collect($slugs)->each(function ($slug) use ($site) {
            $this->get(route('categories.show', [
                'site' => $site,
                'slug' => $slug
            ]))->assertOk();
        });
    }

    /** @test */
    public function user_can_browse_sports_categories()
    {
        $site = 'sport24';
        $slugs = [
            'goals',
            'clips'
        ];

        collect($slugs)->each(function ($slug) use ($site) {
            $this->get(route('categories.show', [
                'site' => $site,
                'slug' => $slug
            ]))->assertOk();
        });
    }
}

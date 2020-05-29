<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    /** @test */
    public function user_can_browse_search_page()
    {
        $title = Akhbaar::newsFeaturedItems()[0]['title'];

        $keyword = \Str::words($title, 1, '');

        $this->get(route('search.show', ['slug' => 'title', 'type' => 'article', 'keyword' => $keyword]))
            ->assertOk()
            ->assertSee($keyword);
    }

    // TODO: search by tag
    // TODO: search by video

}

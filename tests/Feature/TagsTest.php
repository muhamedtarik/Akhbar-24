<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagsTest extends TestCase
{
    /** @test */
    public function user_can_browse_tags_page()
    {
        $tag = Akhbaar::newsFeaturedItems()[0]['tags'][0]['slug'];

        $this->get(route('tags.show', ['tag' => $tag]))
            ->assertOk()
            ->assertSee($tag);
    }
}

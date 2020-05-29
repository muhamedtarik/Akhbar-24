<?php

namespace Tests\Feature;

use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ItemsTest extends TestCase
{
    /** @test */
    public function user_can_browse_single_item()
    {
        $id = Akhbaar::newsFeaturedItems()[0]['id'];

        $this->get(route('items.show', ['id' => $id]))
            ->assertOk();
            // TODO: assert see content
    }
}

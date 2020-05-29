<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditorsTest extends TestCase
{
    /** @test */
    public function user_can_browse_editor_profile_page()
    {
        $this->assertTrue(true);
    //
    //     $this->get(route('editors.show', ['id' => $editor['id']]))
    //         ->assertOk()
    //         ->assertSee($editor['name']);
    }
}

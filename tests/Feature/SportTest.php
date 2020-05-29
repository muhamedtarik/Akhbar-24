<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SportTest extends TestCase
{
    /** @test */
    public function desktop_layout_is_selected_if_client_is_desktop()
    {
        $this->get(route('sport.index'))
            ->assertViewIs('desktop.sport.index');
    }
}

<?php

namespace Tests\Feature;

use App\Argaam\Facades\Akhbaar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;
use Mockery\Mock;
use Tests\TestCase;

class AkhbaarTest extends TestCase
{

    protected $mobileAgent = 'Mozilla/5.0 (iPhone; U; ru; CPU iPhone OS 4_2_1 like Mac OS X; ru) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5';
    protected $tabletAgent = 'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25';
    protected $desktopAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11) AppleWebKit/601.1.56 (KHTML, like Gecko) Version/9.0 Safari/601.1.56';

    /** @test */
    public function desktop_layout_is_selected_if_client_is_desktop()
    {
        // $agent = new Agent();
        // $agent->setUserAgent($this->mobileAgent);

        $this->get(route('akhbaar.index'))
            ->assertViewIs('desktop.index');
    }

    // /** @test */
    // public function mobile_layout_is_selected_if_client_is_mobile()
    // {
    //     $this->withServerVariables(['HTPP_USER_AGENT' => $this->mobileAgent])
    //         ->get(route('akhbaar.index'))
    //         ->assertViewIs('mobile.index');
    // }

    /** @test */
    public function user_can_browse_a24_homepage()
    {
        // $items = collect(range(1, 3))->map(function ($id) {
        //     return [
        //         'id' => $id,
        //         'title' => "Title ${id}"
        //     ];
        // });
        //
        // Akhbaar::shouldReceive('newsFeaturedItems')->andReturn($items);


        $this->get(route('akhbaar.index'))
            ->assertOk();
    }

    /** @test */
    public function user_can_browse_s24_homepage()
    {
        $this->get(route('sport.index'))
            ->assertOk();
    }
}

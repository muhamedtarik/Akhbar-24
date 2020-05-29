<?php

namespace App\Http\Controllers;

use App\Argaam\Facades\Akhbaar;
use App\Traits\DetectsLayouts;
use Illuminate\Support\Facades\Auth;

class AkhbaarController extends Controller
{
    use DetectsLayouts;

    /**
     * Resource listing.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $featured = Akhbaar::newsFeaturedItems();
        $homelisted = Akhbaar::newsHomelistedItems();
        $mostRead = Akhbaar::mostReadAndCommented('most-reads', 'akhbaar24');
        $mostCommented = Akhbaar::mostReadAndCommented('most-comments', 'akhbaar24');

        return view($this->layout() . '.index', compact('featured', 'homelisted', 'mostRead', 'mostCommented'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Traits\DetectsLayouts;
use App\Argaam\Facades\Akhbaar;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemController extends Controller
{
    use DetectsLayouts;

    /**
     * Show resource.
     *
     * @param  $id
     * @return \Illuminate\View\View
     * @throws \Throwable
     */
    public function show($id)
    {
        throw_unless($item = Akhbaar::item($id), NotFoundHttpException::class);

        $view = $item['type'] != 'article'
            ? $item['type']
            : 'show';

        $site = $this->site($item);

        return view($this->layout() . ".items.${view}", compact('item', 'site'));
    }
}

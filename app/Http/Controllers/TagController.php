<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\DetectsLayouts;
use App\Traits\HasPagination;
use App\Argaam\Facades\Akhbaar;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TagController extends Controller
{
    use DetectsLayouts, HasPagination;

    /**
     * Display the specified resource.
     *
     * @param  string  $tag
     * @param  Request  $request
     * @return \Illuminate\View\View
     * @throws \Throwable
     */
    public function show($tag, Request $request)
    {
        $items = Akhbaar::search('tag', $tag, null, $request->page);

        throw_unless($items, NotFoundHttpException::class);

        $paginator = $this->getPaginator($items, route('tags.show', ['tag' => $tag]));

        return view($this->layout() . ".tags", compact('items', 'paginator', 'tag'));
    }
}

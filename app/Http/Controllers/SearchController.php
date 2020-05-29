<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\DetectsLayouts;
use App\Traits\HasPagination;
use App\Argaam\Facades\Akhbaar;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SearchController extends Controller
{
    use DetectsLayouts, HasPagination;

    /**
     * @param  $slug
     * @param  Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     * @throws \Throwable
     */
    public function show($slug, Request $request)
    {
        if (! in_array($slug, ['title', 'tag'])) {
            return back();
        }

        $request->validate([
            'keyword' => 'required',
            'type' => Rule::in(['article', 'video'])
        ]);

        $items = Akhbaar::search($slug, $request->keyword, $request->type ?? null, $request->page);

        throw_unless($items, NotFoundHttpException::class);

        $paginator = $this->getPaginator($items, route('search.show', [
            'slug' => $slug,
            'type' => $request->type,
            'keyword' => $request->keyword
        ]));

        return view($this->layout() . ".search", compact('items', 'paginator'));
    }
}

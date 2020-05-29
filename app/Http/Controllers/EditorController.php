<?php

namespace App\Http\Controllers;

use App\Traits\HasPagination;
use App\Traits\DetectsLayouts;
use App\Argaam\Facades\Akhbaar;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditorController extends Controller
{
    use DetectsLayouts, HasPagination;

    /**
     * Show resource.
     *
     * @param  $id
     * @param  Request  $request
     * @return \Illuminate\View\View
     * @throws \Throwable
     */
    public function show($id, Request $request)
    {
        throw_unless($editor = Akhbaar::editor($id), NotFoundHttpException::class);

        $items = Akhbaar::search('editor', $id, null, $request->page);

        $paginator = $this->getPaginator($items, route('editors.show', ['id' => $id]));

        return view($this->layout() . ".editor", compact('editor', 'items', 'paginator', 'site'));
    }
}

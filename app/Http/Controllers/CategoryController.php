<?php

namespace App\Http\Controllers;

use App\Traits\DetectsLayouts;
use App\Traits\HasPagination;
use Illuminate\Http\Request;
use App\Argaam\Facades\Akhbaar;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryController extends Controller
{
    use DetectsLayouts, HasPagination;

    /**
     * Category names.
     *
     * @var array
     */
    protected $names;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->names = [
            'miscellaneous' => 'منوعات',
            'international' => 'عربية وعالمية',
            'accidents' => 'حوادث',
            'videos24' => 'فيديو 24',
            'galleries24' => 'صور 24',
            'goals' => 'أهداف',
            'clips' => 'أحدث المقاطع'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $site
     * @param  string  $slug
     * @param  Request  $request
     * @return \Illuminate\View\View
     * @throws \Throwable
     */
    public function show($site, $slug, Request $request)
    {
        // paginate 9 in videos categories
        $perPage = in_array($slug, ['videos24', 'goals', 'clips'])
            ? 9
            : 10;

        $category = Akhbaar::category($site, $slug, $request->page ?? 1, $perPage);

        throw_unless($category, NotFoundHttpException::class);

        $paginator = $this->getPaginator($category, route('categories.show', ['site' => $site, 'slug' => $slug]));

        $view = $this->view($slug);
        $categoryName = $this->names[$slug];

        return view($this->layout() . ".categories.${view}", compact('category', 'paginator', 'site', 'categoryName'));
    }
}

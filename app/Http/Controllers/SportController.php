<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasPagination;
use App\Traits\DetectsLayouts;
use App\Argaam\Facades\Akhbaar;
use App\Argaam\Facades\Scorlytics;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SportController extends Controller
{
    use DetectsLayouts, HasPagination;

    /**
     * Resource listing.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $featured = Akhbaar::sportFeaturedItems();
        $homelisted = Akhbaar::sportHomelistedItems();
        $mostRead = Akhbaar::mostReadAndCommented('most-reads', 'sport24');
        $mostCommented = Akhbaar::mostReadAndCommented('most-comments', 'sport24');

        $matches = $this->getCurrentMatches();
        $seasons = $this->getSeasons();

        return view($this->layout() . '.sport.index', compact('featured', 'homelisted', 'mostRead', 'mostCommented', 'seasons', 'matches'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $club
     * @param  Request  $request
     * @return \Illuminate\View\View
     * @throws \Throwable
     */
    public function club($club, Request $request)
    {
        $items = Akhbaar::search('tag', $club, null, $request->page);

        throw_unless($items, NotFoundHttpException::class);

        $paginator = $this->getPaginator($items, route('mobile.sport.clubs.news', ['club' => $club]));

        return view('mobile.sport.clubs-news', compact('items', 'paginator', 'club'));
    }

    /**
     * Current Matches mobile view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mobileCurrentMatches()
    {
        $matches = $this->getCurrentMatches();

        return view('mobile.sport.matches', compact('matches'));
    }

    /**
     * Seasons mobile view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mobileSeasons()
    {
        $seasons = $this->getSeasons();

        return view('mobile.sport.teams', compact('seasons'));
    }

    /**
     * Current Matches.
     *
     * @return array
     */
    public function getCurrentMatches()
    {
        return Scorlytics::currentMatches();
    }

    /**
     * Competitions.
     *
     * @return array
     */
    public function getCompetitions()
    {
        return \Arr::pluck(Scorlytics::competitions(), 'current_season.id');
    }

    /**
     * Seasons.
     *
     * @return array
     */
    public function getSeasons()
    {
        $competitions =  $this->getCompetitions();

        foreach ($competitions as $competition) {

            $seasons[] = Scorlytics::seasonStanding($competition);
        }

        return $seasons;
    }
}

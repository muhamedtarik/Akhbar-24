<?php

namespace App\Traits;

use Jenssegers\Agent\Facades\Agent;

trait DetectsLayouts
{
    /**
     * Desktop/mobile Layout.
     *
     * @return string
     */
    protected function layout()
    {
        return (Agent::isMobile() or Agent::isTablet())
            ? 'mobile'
            : 'desktop';
    }

    /**
     * View name.
     *
     * @param  $slug
     * @return string
     */
    protected function view($slug)
    {
        // video
        if (in_array($slug, ['videos24', 'goals', 'clips'])) {
            return 'videos24';
        }

        return $slug == 'galleries24'
            ? $slug
            : 'show';
    }

    /**
     * Site layout.
     *
     * @param  $item
     * @return string
     */
    protected function site($item)
    {
        $sites = [
            'أخبار٢٤' => 'akhbaar24',
            'سبورت٢٤' => 'sport24'
        ];

        $site = $item['categories'][0]['site'] ?? false;

        if ($site) {
            return $sites[$site];
        }

        return $item['akhbaar_home_page']
            ? 'akhbaar24'
            : 'sport24';
    }
}

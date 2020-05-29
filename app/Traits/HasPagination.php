<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;

trait HasPagination
{
    /**
     * Paginator.
     *
     * @param  $response
     * @param  $path
     * @return LengthAwarePaginator
     */
    protected function getPaginator($response, $path)
    {
        return new LengthAwarePaginator(
            $response['data'],
            $response['meta']['total'],
            $response['meta']['per_page'],
            $response['meta']['current_page'], [
                'path' => $path
            ]
        );
    }
}

<?php

namespace Khoatran\Unlock\Services\Business;

use Khoatran\Unlock\Models\Movie;
use Khoatran\Unlock\Services\Contracts\MovieContract;

class MovieService implements MovieContract
{
    /**
     * @return array
     */
    public function getAllMovie(): array
    {
        $movies = new Movie();
        return $movies->getAll();
    }
}

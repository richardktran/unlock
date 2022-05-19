<?php

namespace Khoatran\Unlock\Services\Business;

use Khoatran\Unlock\Models\Movie;
use Khoatran\Unlock\Services\Contracts\MovieContract;

class MovieService implements MovieContract
{
    /**
     * @return array
     */
    public function getAllMovies(): array
    {
        $movies = new Movie();
        return $movies->getAll();
    }

    public function storeMovie($movieData): false|array
    {
        $movies = new Movie();
        $moviesRepository = $movies->getAll();
        $lastMovie = end($moviesRepository);
        $lastId = $lastMovie['id'];
        $newMovie = [
            'id' => $lastId + 1,
            'title' => $movieData['title'],
            'plot' => $movieData['plot'],
            'rating' => $movieData['rating'],
        ];
        $insertCheck = $movies->insert($newMovie);
        if (!$insertCheck) {
            return false;
        }
        return $newMovie;
    }
}

<?php

namespace Khoatran\Unlock\Controllers;

use Khoatran\Unlock\Models\Movie;

class HomeController
{
    public function index()
    {
        $movies = new Movie();
        $moviesData = $movies->getAll();
        return json_encode($moviesData);

    }
}


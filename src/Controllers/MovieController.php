<?php

namespace Khoatran\Unlock\Controllers;

use Khoatran\Unlock\Services\Contracts\MovieContract;

class MovieController
{
    /**
     * @var MovieContract
     */
    protected MovieContract $movieService;

    public function __construct(MovieContract $movieService)
    {
        $this->movieService = $movieService;
    }

    /**
     * @return false|string
     */
    public function index(): false | string
    {
        $moviesData = $this->movieService->getAllMovie();
        return json_encode($moviesData);
    }
}

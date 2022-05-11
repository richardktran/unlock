<?php

namespace Khoatran\Unlock\Controllers;

use Khoatran\Unlock\Request\Request;
use Khoatran\Unlock\Response\Response;
use Khoatran\Unlock\Services\Contracts\MovieContract;

class MovieController
{
    /**
     * @var MovieContract
     */
    protected MovieContract $movieService;

    protected Request $request;

    public function __construct(MovieContract $movieService)
    {
        $this->movieService = $movieService;
        $this->request = new Request();
    }

    /**
     * @return false|string
     */
    public function index(): false|string
    {
        $moviesData = $this->movieService->getAllMovies();
        return Response::response($moviesData, 200);
    }

    public function store(): false|string
    {
        $movieData = $this->request->getBody();
        $result = $this->movieService->storeMovie($movieData);
        return Response::response($movieData, 201);
    }
}

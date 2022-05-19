<?php

namespace Khoatran\Unlock\Services\Contracts;

interface MovieContract
{
    public function getAllMovies(): array;

    public function storeMovie(array $movieData): false|array;
}

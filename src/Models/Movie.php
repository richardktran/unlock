<?php

namespace Khoatran\Unlock\Models;

use Khoatran\Unlock\Helpers\XmlHelper;

class Movie
{
    use XmlHelper;

    protected int $id;
    protected string $title;
    protected array $characters;
    protected string $plot;
    protected int $rating;

    /**
     * @return string
     */
    public function getPlot(): string
    {
        return $this->plot;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return array
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        $xmlMovies = $this->xml2object('src/Database/movies.xml');
        $movies = [];
        foreach ($xmlMovies as $movie) {
            $movies[] = [
                'id' => (int)$movie->id,
                'title' => (string)$movie->title,
                'plot' => (string)$movie->plot,
            ];
        }
        return $movies;
    }
}

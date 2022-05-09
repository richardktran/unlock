<?php

namespace Khoatran\Unlock\Models;

use Khoatran\Unlock\Helpers\XmlHelper;

class Movie
{
    protected int $id;
    protected string $title;
    protected array $characters;
    protected string $plot;
    protected int $rating;
    private \SimpleXMLElement $movies;

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


    public function getAll()
    {
        $xmlMovies = XmlHelper::xml2object('src/Database/movies.xml');
        $movies = [];
        foreach ($xmlMovies as $movie) {
            $movieData = new Movie();
            $movieData->title = (string)$movie->title;
            $movieData->plot = (string)$movie->plot;
            $movieData->id = (int)$movie->id;
            $movies[] = $movieData;
        }
        return $movies;

    }

}


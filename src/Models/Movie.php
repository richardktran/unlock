<?php

namespace Khoatran\Unlock\Models;

use Khoatran\Unlock\Helpers\XmlHelper;

class Movie
{
    use XmlHelper;

    const DATABASE_URL = 'src/Database/movies.xml';

    protected int $id;
    protected string $title;
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
        $xmlMovies = $this->xml2object(self::DATABASE_URL);
        $movies = [];
        foreach ($xmlMovies as $movie) {
            $movies[] = [
                'id' => (int)$movie->id,
                'title' => (string)$movie->title,
                'plot' => (string)$movie->plot,
                'rating' => (string)$movie->rating,
            ];
        }
        return $movies;
    }

    public function insert($newMovie): bool
    {
//        return $this->addData2Xml(self::DATABASE_URL, $newMovie);
        return true;
    }
}

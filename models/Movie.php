<?php


class Movie
{
    //Dchiaro tutte le variabili di istanza che mi serviranno per l'oggetto Movie

    public $title;
    public $producer;
    public $releaseYear;
    public $genre;
    public $posterPath;
    public $duration;

    function __construct($_title, $_producer, $_releaseYear, $_genre, $_posterPath, $_duration)
    {
        $this->title = $_title;
        $this->producer = $_producer;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
        $this->posterPath = $_posterPath;
        $this->duration = $_duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getProducer()
    {
        return $this->producer;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    public function getPosterPath()
    {
        return $this->posterPath;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}
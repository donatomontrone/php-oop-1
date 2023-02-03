<?php
include_once __DIR__ . '/Genre.php';


class Movie
{
    //Dchiaro tutte le variabili di istanza che mi serviranno per l'oggetto Movie

    public $title;
    public $producer;
    public $releaseYear;
    public $genres;
    public $posterPath;
    public $duration;


    function __construct($_title, $_producer, $_releaseYear, $_genres, $_posterPath, $_duration)
    {
        $this->title = $_title;
        $this->producer = $_producer;
        $this->releaseYear = $_releaseYear;
        $this->genres = $_genres;
        $this->posterPath = $_posterPath;
        $this->duration = $_duration;
    }

    // Funzioni per i dati inseriti

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

    //Mi restituisce tutti i generi tramite la funzione inserita nella cklasse Genre
    public function getAllGenres()
    {
        $genreName = "";

        foreach ($this->genres as $genre) {
            $genreName .= $genre->getGenre() . '  ';
        }

        return $genreName;
    }
}
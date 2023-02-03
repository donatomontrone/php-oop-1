<?php

class Genre
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function getGenre()
    {
        return $this->name;
    }
}
<?php

include_once __DIR__ . '/../models/Movie.php';
include_once __DIR__ . '/../models/Genre.php';

//Dichiaro un array vuoto
$movies = [];

//Dichiaro i generi per i film (con una nuova instanza di Genre)
$action = new Genre('Action');
$adventure = new Genre('Adventure');
$fantasy = new Genre('Fantasy');
$comedy = new Genre('Comedy');
$sciFi = new Genre('Sci-Fi');
$horror = new Genre('Horror');

//Assegno ad un variabile una nuova istanza di Movie
$spiderman = new Movie('Spiderman - No Way Home', 'Marvel Studios', 2021, [$action, $comedy, $sciFi], 'https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2Fpublic%2Fnews%2F0087%2F87925%2Funnamed+(21).jpg', '148 min');

$strange = new Movie('Doctor Strange in The Multiverse of Madness', 'Marvel Studios', 2022, [$action, $horror, $sciFi], 'https://www.nerdpool.it/wp-content/uploads/2022/02/doctor-strange-in-the-multiverse-of-madness-trailer-poster-691x1024.jpeg', '126 min');

$thor = new Movie('Thor - Love and Thunder', 'Marvel Studios', 2022, [$action, $adventure, $comedy, $fantasy, $sciFi], 'https://www.nerdpool.it/wp-content/uploads/2022/04/thor-4-love-and-thunder-poster-italiano-691x1024.jpeg', '119 min');


$antMan = new Movie('Ant-Man and The Wasp - Quantumania', 'Marvel Studios', 2023, [$action, $adventure], 'https://www.nerdpool.it/wp-content/uploads/2023/01/ant-man-wasp-quantumania-poster-ita-819x1024.jpeg', '125 min');

//Pusho tutto nell'array vuoto
array_push($movies, $antMan, $thor, $spiderman, $strange);
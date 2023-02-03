<?php

include_once __DIR__ . '/../models/Movie.php';

$movies = [];

$antMan = new Movie('Ant-Man and The Wasp - Quantumania', 'Marvel Studios', 2023, 'Action', 'https://www.nerdpool.it/wp-content/uploads/2023/01/ant-man-wasp-quantumania-poster-ita-819x1024.jpeg', '125 min');

$thor = new Movie('Thor - Love and Thunder', 'Marvel Studios', 2022, 'Actiom', 'https://www.nerdpool.it/wp-content/uploads/2022/04/thor-4-love-and-thunder-poster-italiano-691x1024.jpeg', '119 min');

$spiderman = new Movie('Spiderman - No Way Home', 'Marvel Studios', 2021, 'Action', 'https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2Fpublic%2Fnews%2F0087%2F87925%2Funnamed+(21).jpg', '148 min');

$strange = new Movie('Doctor Strange in The Multiverse of Madness', 'Marvel Studios', 2022, 'Action', 'https://www.nerdpool.it/wp-content/uploads/2022/02/doctor-strange-in-the-multiverse-of-madness-trailer-poster-691x1024.jpeg', '126 min');

array_push($movies, $antMan, $thor, $spiderman, $strange);
echo '<pre>';
var_dump($movies);
echo '</pre>';
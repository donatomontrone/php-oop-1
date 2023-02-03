<?php

include_once __DIR__ . "/db/db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>

<body>
    <main>
        <h1> Movies</h1>
        <!-- Apro qui il tag php per il foreach --> <?php
                                                    foreach ($movies as $movie) {
                                                    ?> <ul>
            <li> <?php echo $movie->getTitle() ?> </li>
            <li> <?php echo $movie->getProducer() ?> </li>
            <li> <?php echo $movie->getReleaseYear() ?> </li>
            <li> <?php echo $movie->getPosterPath() ?> </li>
            <li> <?php echo $movie->getGenre() ?> </li>
        </ul>
        <!-- Chiudo qui il tag php del foreach --> <?php } ?>
    </main>
</body>

</html>
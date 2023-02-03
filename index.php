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
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Marvel_Studios_2016_logo.svg/1200px-Marvel_Studios_2016_logo.svg.png"
                    alt="Bootstrap" width="240" height="54">
            </a>
        </div>
    </nav>
    <main>
        
        <div class="container-fluid">
            <div class="row g-5">
            <?php foreach ($movies as $movie) {?> 
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="<?php echo $movie->getPosterPath() ?>" alt="<?php echo $movie->getTitle() ?>" class="card-img-top">
                        <h5 class="card-title p-3"><?php echo $movie->getTitle() ?></h5>
                        <p class="card-text px-3"><?php echo $movie->getProducer() ?> - <?php echo $movie->getReleaseYear() ?></p>
                        <p class="card-text p-3"><?php echo $movie->getAllGenres() ?></p>
                    </div>
                    <!-- Chiudo qui il tag php del foreach --> 
                </div>
                    <?php } ?>
    </main>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
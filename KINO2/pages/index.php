<?php
    session_start(); 
    include_once '../php/includes/sessionexpire.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Projekt na aplikacje internetowe">
        <meta name="keywords" content="Kino, Projekt, Filmy">
        <meta name="author" content="Oliwier Michalski">
        <title>Kino</title>
        <link rel="icon" href="../assets/img/camera-icon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/style.css">
    </head>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark shadow bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img class="cam-ico" src="../assets/img/camera-icon.png"> Cinema</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Filmy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="repertoire.php">Repertuar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                    </ul>
                    <div class="text-end d-flex align-items-center">
                        <?php include_once '../php/includes/userbuttons.php'; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <main>
            <div id="movies-carousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#movies-carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#movies-carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#movies-carousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#movies-carousel" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-image" style="background-position: top; background-image: url('../assets/img/movie-1-big.jpg')"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2>TERAZ W KINACH</h2>
                            <h4>TOP GUN: Maverick</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-image" style="background-position: top; background-image: url('../assets/img/movie-2-big.jpg')"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2>TERAZ W KINACH</h2>
                            <h4>BUZZ ASTRAL</h4>                  
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-image" style="background-image: url('../assets/img/movie-3-big.jpg')"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2>TERAZ W KINACH</h2>
                            <h4>JURASSIC WORLD DOMINION</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-image" style="background-image: url('../assets/img/movie-4-big.jpg')"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2>TERAZ W KINACH</h2>
                            <h4>DOCTOR STRANGE: W MULTIWERSUM OBŁĘDU</h4>
                        </div>
                    </div>
                </div>
                <a href="#movies-carousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
                    <span class="sr-only"></span>
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a href="#movies-carousel" class="carousel-control-next" role="button" data-bs-slide="next">
                    <span class="sr-only"></span>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
            <div class="album py-5 bg-light">
                <div class="container-custom container">
                    <div class="row g-3 g-md-4 g-lg-4 mb-4">
                        <div class="col-6 col-md-3 col-lg-2 offset-0 offset-lg-2">
                            <div class="card shadow text-bg-dark">
                                <img src="../assets/img/movie-10.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-6.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-4.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-1.jpg" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 g-md-4 g-lg-4 mb-4">
                        <div class="col-6 col-md-3 col-lg-2 offset-0 offset-lg-2">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-7.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-8.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-2.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-3.jpg" class="card-img-top">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 g-md-4 g-lg-4 mb-4">
                        <div class="col-6 col-md-3 col-lg-2 offset-0 offset-lg-2">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-12.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-9.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-11.jpg" class="card-img-top">
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 offset-0">
                            <div class="card shadow-sm text-bg-dark">
                                <img src="../assets/img/movie-5.jpg" class="card-img-top">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
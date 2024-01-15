<?php
    session_start();
    include_once '../php/includes/usercheck.php';
    include_once '../php/includes/dbhandler.php';
    include_once '../php/includes/logouthandler.php';
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
                            <a class="nav-link" aria-current="page" href="index.php">Filmy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="repertoire.php">Repertuar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                    </ul>
                    <div class="text-end d-flex align-items-center">
                        <a href="login.php" class="nav-item d-flex btn btn-outline-light me-2">Zaloguj się</a>
                        <a href="register.php" class="nav-item d-flex btn btn-success">Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <main>
            <div class="container" style="margin-top: 20vh;">
                <div class="row">
                    <div class="col-12" style="text-align: center;">
                        <h1>Pomyślnie wylogowano!</h1>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </footer>
</html>
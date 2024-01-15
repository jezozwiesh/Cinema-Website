<?php
    session_start();
    include_once '../php/includes/sessionexpire.php';
    include_once '../php/includes/dbhandler.php';
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
                            <a class="nav-link active" href="#">Repertuar</a>
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
            <div class="shadow d-flex align-items-center" style="height: 16vh; width: 100%; position: relative; top:  59px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <form action="" id="form_repertoire" method="GET">
                                <div class="btn-group d-flex justify-content-evenly">
                                    <input type="submit" name='day' value="Pn" class="btn btn-outline-secondary btn-days" disabled>
                                    <input type="submit" name='day' value="Wt" class="btn btn-outline-secondary btn-days" disabled>
                                    <input type="submit" name='day' value="Śr" class="btn btn-outline-secondary btn-days">
                                    <input type="submit" name='day' value="Cz" class="btn btn-outline-secondary btn-days">
                                    <input type="submit" name='day' value="Pt" class="btn btn-outline-secondary btn-days">
                                    <input type="submit" name='day' value="Sb" class="btn btn-outline-secondary btn-days" disabled>
                                    <input type="submit" name='day' value="Nd" class="btn btn-outline-secondary btn-days" disabled>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-4 offset-md-1">
                            <select form="form_repertoire" class="form-select" name="city">
                                <option selected>Wybierz miasto</option>
                                <?php
                                    $result = mysqli_query($connect, "SELECT * FROM cinemas;");
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '<option value="'. $row['cinema_id'] .'">'. $row['city'] .'</option>';
                                        }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 15vh;">
                <form method="POST" from="form_movies">
                    <ul class="list-group list-group-flush">                    
                        <?php include_once '../php/includes/movieselection.php';?>
                    </ul>
                </form>
            </div>
        </main>
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </footer>
</html>
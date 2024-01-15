<?php
    session_start();
    include_once '../php/includes/sessionexpire.php';
    include_once '../php/includes/usercheck.php';
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
                        <?php include_once '../php/includes/userbuttons.php'; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <main>
            <div class="container" style="margin-top: 20vh;">
                <div class="row">
                    <div class="border shadow-sm rounded-2 p-3 col-sm-12 offset-sm-0 col-md-10 offset-md-1">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <h1 class="mb-3 me-3">WYBIERZ BILET</h1>
                            <?php include_once '../php/includes/ticketdetails.php'; ?>
                        </div><hr>
                        <form action="" method="GET" id="form_ticket">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">RODZAJ</th>
                                        <th scope="col">CENA</th>
                                        <th scope="col">ILOŚĆ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>NORMALNY</td>
                                        <td>19.90zł</td>
                                        <td>
                                            <select form="form_ticket" class="form-select-sm" name="regular_ticket_ammount">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ULGOWY</td>
                                        <td>17.90zł</td>
                                        <td>
                                            <select form="form_ticket" class="form-select-sm" name="reduced_ticket_ammount">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SENIOR</td>
                                        <td>17.90zł</td>
                                        <td>
                                            <select form="form_ticket" class="form-select-sm" name="senior_ticket_ammount">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-danger"><?php include_once '../php/includes/ticketformhandler.php'; ?></p>
                            <div class="d-flex justify-content-end w-100">
                                <button type="submit" name="submit" class="btn btn-warning">WYBIERZ MIEJSCA</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </footer>
</html>
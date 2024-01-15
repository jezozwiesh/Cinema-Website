<?php
    if(!isset($_SESSION['username']))
    {
        echo '<a href="login.php" class="nav-item d-flex btn btn-outline-light me-2">Zaloguj się</a>
        <a href="register.php" class="nav-item d-flex btn btn-success">Zarejestruj się</a>';
    }
    else 
    {
        echo '<a class="nav-item d-flex btn btn-outline-light me-2">'. $_SESSION['username'] .'</a>
        <a href="logout.php" class="nav-item d-flex btn btn-danger">Wyloguj się</a>';
    }
?>
<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $uid = $_SESSION['uid'];
    
    $cinema_id = $_SESSION['city_id'];
    $mov_id = $_SESSION['movie_id'];
    $date = $_SESSION['date'];
    $time = $_SESSION['time'];
    
    $rgt_ammount = $_SESSION['regular_ticket_ammount'];
    $rdt_ammount = $_SESSION['reduced_ticket_ammount'];
    $snt_ammount = $_SESSION['senior_ticket_ammount'];
    $cost = ($rgt_ammount * 19.90) + ($rdt_ammount * 17.90) + ($snt_ammount * 17.90);
    $seats = implode(' , ', json_decode($_COOKIE['seat']));

    $sql1 = "INSERT INTO orders (user_id, cinema_id, movie_id, date, time, cost, rdt_amount, rgt_amount, snt_amount, seats) VALUES ('$uid', '$cinema_id', '$mov_id', '$date', '$time', '$cost', '$rdt_ammount', '$rgt_ammount', '$snt_ammount', '$seats')";
    mysqli_query($connect, $sql1) or die(mysqli_error($connect));

    
    // USUWAMY WIEKSZOSC DANYCH Z SESJI I CIASTECZEK

    unset($_SESSION['regular_ticket_ammount']);
    unset($_SESSION['reduced_ticket_ammount']);
    unset($_SESSION['senior_ticket_ammount']);
    unset($_SESSION['date']);
    unset($_SESSION['time']);
    unset($_SESSION['city_id']);
    unset($_SESSION['movie_id']);

    $past = time() - 3600;
    setcookie('seat','',$past);
    setcookie('seats_to_choose','',$past);
    setcookie('btns_clicked','',$past);
    setcookie('b_seats','',$past);
?>
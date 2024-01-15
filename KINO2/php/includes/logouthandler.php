<?php 
    session_destroy();
    $past = time() - 3600;
    setcookie('seat','',$past);
    setcookie('seats_to_choose','',$past);
    setcookie('btns_clicked','',$past);
    setcookie('b_seats','',$past);
?>
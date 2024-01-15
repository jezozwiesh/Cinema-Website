<?php
    $now = time();
    if (!isset($_SESSION['expire']))
    {
        echo '';
    }
    else if($now > $_SESSION['expire'])
    {
        echo '<script> alert("Sesja wygasła, musisz zalogować się ponownie."); 
        window.location. = "../pages/checkout-summary.php"</script>';
        session_destroy();

        $past = time() - 3600;
        setcookie('seat','',$past);
        setcookie('seats_to_choose','',$past);
        setcookie('btns_clicked','',$past);
        setcookie('b_seats','',$past);
    }
?>
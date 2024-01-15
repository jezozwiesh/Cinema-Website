<?php

    // GENERACJA SIEDZEŃ

    $r = 1;
    $s = 1;
    for ($i=1; $i<=144; $i++) 
    { 
        if ($i == 1)
        {
            echo '<div class="row">
            <div class="col-btns-seat col-1">
                <input type="checkbox" class="btn-check" id="'.$r.'-'.$s.'" autocomplete="off">
                <label class="btn btn-outline-primary btn-seat" for="'.$r.'-'.$s.'">'.$s.'</label>
            </div>';
        }
        else if($s % 12 == 0)
        {
            $r++;
            $s = 1;
            echo '<div class="col-btns-seat col-1">
                <input type="checkbox" class="btn-check" id="'.$r.'-'.$s.'" autocomplete="off">
                <label class="btn btn-outline-primary btn-seat" for="'.$r.'-'.$s.'">'.$s.'</label>
            </div>';
        }
        else 
        {
            $s++;
            echo '<div class="col-btns-seat col-1">
                <input type="checkbox" class="btn-check" id="'.$r.'-'.$s.'" autocomplete="off">
                <label class="btn btn-outline-primary btn-seat" for="'.$r.'-'.$s.'">'.$s.'</label>
            </div>';
        }
       
    }

    // MIEJSCA ZAJETE

    $sql_b = "SELECT seats FROM orders WHERE cinema_id = ".$_SESSION['city_id']." AND movie_id = ".$_SESSION['movie_id'].";";
    $result_b = mysqli_query($connect, $sql_b) or die(mysqli_error($connect));
    $row_b = mysqli_fetch_assoc($result_b);
    if($row_b != null)
    {
        $row_b = json_encode($row_b['seats']);
        echo "<script type='text/javascript'>document.cookie = 'b_seats = ".$row_b."';</script>";
    }

    // JESLI MIEJSCA ZOSTANĄ WYBRANE

    if(isset($_GET['submit']))
    {
        if($_COOKIE['btns_clicked'] == $_COOKIE['seats_to_choose'])
        {
            echo "<script type='text/javascript'>document.location.href='../pages/checkout-summary.php';</script>"; 
        }
        else if ($_COOKIE['btns_clicked'] < $_COOKIE['seats_to_choose'])
        {
            echo '<p class="text-danger mt-4 mb-0"><i class="bi bi-exclamation-circle"></i> Należy wybrać wszystkie miejsca.</p>';
        }
        else
        {
            echo '<p class="text-danger mt-4 mb-0"><i class="bi bi-exclamation-circle"></i> Nieoczekiwany błąd. Proszę skontaktować się z właścicielem strony.</p>';
        }
    }

?>
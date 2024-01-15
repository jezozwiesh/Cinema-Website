<?php
    // ZGRYWAMY WSZYSTKIE WCZESNIEJSZE DANE Z CIASTECZEK
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $rgt_ammount = $_SESSION['regular_ticket_ammount'];
    $rdt_ammount = $_SESSION['reduced_ticket_ammount'];
    $snt_ammount = $_SESSION['senior_ticket_ammount'];
    $seats = json_decode($_COOKIE['seat']);
    $i = 0;

    function seat_column()
    {
        global $rgt_ammount, $rdt_ammount, $snt_ammount, $seats;
        static $function_called = false;

        if (!$function_called)                                      // FUNKCJA MOZE BYC WYWOLANA TYLKO RAZ
        {
            $function_called = true;
            return '<td style="width: 40%;" rowspan="'. ($rdt_ammount + $rgt_ammount + $snt_ammount) .'">'. implode(' , ', $seats) .'</td>';
        }
    }

    echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">RODZAJ</th>
                <th scope="col">ILOŚĆ</th>
                <th scope="col">CENA</th>
                <th scope="col">MIEJSCE [rząd-siedzenie]</th>
            </tr>
        </thead>
        <tbody>';

    if($rgt_ammount > 0)
    {
        echo '<tr>
            <td>NORMALNY</td>
            <td>'.$rgt_ammount.'</td>
            <td>19.90zł</td>
            '.seat_column().'
        </tr>';
    }
    
    if ($rdt_ammount > 0)
    {
        echo '<tr>
            <td>ULGOWY</td>
            <td>'.$rdt_ammount.'</td>
            <td>17.90zł</td>
            '.seat_column().'
        </tr>';
    }

    if ($snt_ammount > 0)
    {
        echo '<tr>
            <td>SENIOR</td>
            <td>'.$snt_ammount.'</td>
            <td>17.90zł</td>
            '.seat_column().'
        </tr>';
    }

    echo '</tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center w-100">
        <a href="../pages/checkout-seat.php" class="btn btn-warning">WRÓĆ</a>
        <div class="btn-group">
            <a class="btn disabled btn-outline-success">'.(($rgt_ammount * 19.90) + ($rdt_ammount * 17.90) + ($snt_ammount * 17.90)).'zł</a>
            <a href="../pages/checkout-end.php" class="btn btn-success">KUPUJĘ</a>
        </div>
    </div>';
?>
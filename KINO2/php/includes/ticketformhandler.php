<?php

    // OBSLUGA FORMULARZA Z BILETAMI

    if(isset($_GET['submit']))
    {
        $rgt_ammount = $_GET['regular_ticket_ammount'];
        $rdt_ammount = $_GET['reduced_ticket_ammount'];
        $snt_ammount = $_GET['senior_ticket_ammount'];

        $_SESSION['regular_ticket_ammount'] = $rgt_ammount;       //  i WRZUCENIE INFORMACJI O BILETACH DO SESJI
        $_SESSION['reduced_ticket_ammount'] = $rdt_ammount;
        $_SESSION['senior_ticket_ammount'] = $snt_ammount;  

        $ticket_ammount = $_GET['senior_ticket_ammount'] + $_GET['reduced_ticket_ammount'] + $_GET['regular_ticket_ammount'];

        if($ticket_ammount > 0)
        {
            echo "<script type='text/javascript'>document.cookie = 'seats_to_choose = ' + ".$ticket_ammount.";</script>";
            echo "<script type='text/javascript'>document.location.href='../pages/checkout-seat.php';</script>"; 
        }
        else
        {
            echo '<i class="bi bi-exclamation-circle"></i> Należy wybrać przynajmniej jeden bilet.';
        }
    }
?>
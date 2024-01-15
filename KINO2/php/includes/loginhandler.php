<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $result = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'") or die(msqli_error($connect));

        if(mysqli_num_rows($result) == 1)
        {
            echo 'Pomyślnie zalogowano!';
            $row = mysqli_fetch_assoc($result);

            $past = time() - 3600;
            setcookie('seat','',$past);
            setcookie('seats_to_choose','',$past);
            setcookie('btns_clicked','',$past);

            $_SESSION['start'] = time();                        // ustalamy poczatek sesji
            $_SESSION['expire'] = $_SESSION['start'] + 600;     // koniec sesji za 10 minut

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            $_SESSION['username'] = $row['username'];
            $_SESSION['uid'] = $row['user_id'];

            echo "<script type='text/javascript'>document.location.href='../pages/index.php';</script>"; 
        }
        else
        {
            echo '<i class="bi bi-exclamation-circle"></i> Błędny email lub hasło.';
        }
    }
?>
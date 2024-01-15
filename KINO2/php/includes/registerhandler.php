<?php
    include_once 'dbhandler.php';
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($username == null || $email == null || $pass == null)
        {
            echo '<i class="bi bi-exclamation-circle"></i> Nie wszystkie dane są uzupełnione.';
        }
        else if (strlen($pass) < 8 || !preg_match("/\d/", $pass) || !preg_match("/[A-Z]/", $pass) || !preg_match("/[a-z]/", $pass) || !preg_match("/\W/", $pass))
        {
            echo '<i class="bi bi-exclamation-circle"></i> Upewnij się, że hasło spełnia wszystkie wymagania.';
        }
        else if(preg_match("/\s/", $pass))
        {
            echo '<i class="bi bi-exclamation-circle"></i> Hasło nie może posiadać spacji.';
        }
        else
        {
            $emailcheck = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email';");
            $usernamecheck = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username';");

            if (mysqli_num_rows($emailcheck) > 0)
            {
                echo '<i class="bi bi-exclamation-circle"></i> Adres email jest zajęty.';
            }
            else if (mysqli_num_rows($usernamecheck) > 0)
            {
                echo '<i class="bi bi-exclamation-circle"></i> Nazwa użytkownika jest zajęta.';
            }
            else 
            {
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass');";
                mysqli_query($connect, $sql);
                echo 'Pomyślnie zarejestrowano!';
                echo "<script type='text/javascript'>document.location.href='../pages/login.php';</script>"; 
            }
        }
    }
?>
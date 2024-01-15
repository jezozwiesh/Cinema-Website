<?php
    if($_SESSION['username'] == null)
    {
        echo "<script type='text/javascript'>document.location.href='../pages/login.php';</script>"; 
    }
?>
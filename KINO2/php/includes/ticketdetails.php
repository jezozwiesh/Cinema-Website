<?php
    $city = $_SESSION['city_id'];
    $movie_id = $_SESSION['movie_id'];

    $sql_perf = "SELECT * FROM performances WHERE cinema_id = '$city' AND movie_id = '$movie_id'";
    $result_perf = mysqli_query($connect, $sql_perf);
    $row_perf = mysqli_fetch_assoc($result_perf);

    $sql_city = "SELECT * FROM cinemas WHERE cinema_id = '$city'";
    $result_city = mysqli_query($connect, $sql_city);
    $row_city = mysqli_fetch_assoc($result_city);

    $sql_mov = "SELECT * FROM movies WHERE movie_id = '$movie_id'";
    $result_mov = mysqli_query($connect, $sql_mov);
    $row_mov = mysqli_fetch_assoc($result_mov);    

    $_SESSION['city'] = $row_city['city'];
    $_SESSION['movie'] = $row_mov['name'];
    $_SESSION['date'] = $row_perf['performance_date'];
    $_SESSION['time'] = $row_perf['performance_time'];

    echo '<h3>'.$row_city['city'].', '.$row_mov['name'].', '.$row_perf['performance_date'].', '.$row_perf['performance_time'].'</h3>';
?>
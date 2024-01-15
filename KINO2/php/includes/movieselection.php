<?php

    if(isset($_GET['day']) && $_GET['city'] != "Wybierz miasto")
    {
        if($_GET['day'] == 'Śr' && $_GET['city'] == 1)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 1 AND performance_date = '2022.06.15'";
        }
        else if ($_GET['day'] == 'Cz' && $_GET['city'] == 1)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 1 AND performance_date = '2022.06.16'";
        }
        else if ($_GET['day'] == 'Pt' && $_GET['city'] == 1)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 1 AND performance_date = '2022.06.17'";
        }
        else if ($_GET['day'] == 'Śr' && $_GET['city'] == 2)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 2 AND performance_date = '2022.06.15'";
        }
        else if ($_GET['day'] == 'Cz' && $_GET['city'] == 2)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 2 AND performance_date = '2022.06.16'";
        }
        else if ($_GET['day'] == 'Pt' && $_GET['city'] == 2)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 2 AND performance_date = '2022.06.17'";
        }
        else if ($_GET['day'] == 'Śr' && $_GET['city'] == 3)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 3 AND performance_date = '2022.06.15'";
        }
        else if ($_GET['day'] == 'Cz' && $_GET['city'] == 3)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 3 AND performance_date = '2022.06.16'";
        }
        else if ($_GET['day'] == 'Pt' && $_GET['city'] == 3)
        {
            $sql = "SELECT performances.movie_id, DATE_FORMAT(performances.performance_time,'%k:%i') as `performance_time`, movies.genre,movies.length, movies.name FROM performances JOIN movies ON performances. movie_id = movies.movie_id WHERE cinema_id = 3 AND performance_date = '2022.06.17'";
        }

        $movies = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($movies))
        {
            echo '<li class="list-group-item mb-5">
                    <div class="row mb-5">
                        <div class="col-xsm-1 col-md-3 movie-img">
                            <img class="rounded img-fluid" src="../assets/img/movie-'. $row['movie_id'] .'.jpg" alt="zdjecie filmu">
                        </div>
                        <div class="col-sm-11 col-md-9 movie-details mb-5 mt-2"">
                            <h2>'. $row['name'] .'</h2>
                            <h5>'. $row['genre'] .' | '. $row['length'] .' min</h5><br>
                            <h4>Kup bilety:</h4>
                            <button type="submit" name="movie" value="'.$row['movie_id'].'" class="btn btn-secondary">'. $row['performance_time'] .'</button>
                        </div>
                    </div>
                </li>';
        }
    }

    if(isset($_POST['movie']))
    {
        $_SESSION['movie_id'] = $_POST['movie'];
        $_SESSION['city_id'] = $_GET['city'];

        echo "<script type='text/javascript'>document.location.href='../pages/checkout-ticket.php';</script>"; 
    }

?>  
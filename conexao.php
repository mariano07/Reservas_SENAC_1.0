<?php
    session_start();

    $servername="localhost";
    $database="reservassenac";
    $username="root";
    $password="root";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con){              
        mysqli_connect_error();
    }
?>
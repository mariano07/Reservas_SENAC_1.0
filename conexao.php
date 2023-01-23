<?php
    header("Location:index.php");
    $servername="localhost";
    $database="reservassenac";
    $username="root";
    $password="root";
    $cryptokey="";
    $con = mysqli_connect($servername, $username, $password, $database);
    if(!$con){              
        mysqli_connect_error();
    }
?>
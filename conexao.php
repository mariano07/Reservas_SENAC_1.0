<?php
    // header("Location:index.php");
    $servername="172.20.126.174";
    $database="reservasenac";
    $username="root";
    $password="root";
    $cryptokey="";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con){              
        mysqli_connect_error();
    }
?>
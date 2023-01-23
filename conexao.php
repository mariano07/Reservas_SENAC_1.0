<?php
    $servername="localhost";
    $database="reservasenac";
    $username="root";
    $password="root";
    $cryptokey="";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con){              
        mysqli_connect_error();
    }
?>
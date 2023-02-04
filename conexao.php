<?php
    $servername="172.20.126.174";
    $database="reservasenac";
    $username="root";
    $password="reservas";
    $cryptokey="@R353rV453n4C#";

    $con = mysqli_connect($servername, $username, $password, $database);

    if(!$con){              
        mysqli_connect_error();
    }
?>
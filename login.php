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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="passwd" placeholder="Senha">
        </form>
    </main>
</body>
</html>
<?php
session_start();

// $servername = "localhost";
// $database = "reservassenac";
// $username = "root";
// $password = "root";

// $con = mysqli_connect($servername, $username, $password, $database);

// if (!$con) {
//     mysqli_connect_error();
// }
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
    <!-- main -->
    <main>

        <div class="page">
            <div class="container">
                <div class="left">
                    <div class="login"><img class="logo" src="images/senac_logo.png"></div>
                    <div class="eula">Ao fazer login, você concorda com os termos ridiculamente longos que você não se
                        preocupou em ler.</div>
                </div>
                <div class="right">
                    <svg viewBox="0 0 320 300">
                        <defs>
                            <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992"
                                x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
                                <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                                <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                            </linearGradient>
                        </defs>
                    </svg>

                    <form action="" method="post">
                        <div class="form">
                            <label for="email">Email</label>
                            <input type="email" id="email">
                            <hr>
                            <label for="password">Senha</label>
                            <input type="password" id="password">
                            <hr>
                            <input type="submit" id="submit" value="Proximo">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>
    <!-- close main -->

    <!-- footer -->
    <footer>
        <script src="js/main.js"></script>
    </footer>
    <!-- close footer -->
</body>

</html>
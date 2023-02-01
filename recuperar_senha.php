<?php
session_start();
//require_once('conexao.php');
include('email.php');

if (isset($_POST['submit'])) {
    $phpmail = new email;
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $phpmail->nova_senha($email, $senha, $_SESSION['user']);
    $con = mysqli_connect($servername, $username, $password, $database);

    if (!$con) {
        mysqli_connect_error();
    }
    $con->query("CALL `proc_new_senha` ('$id_usuario','$senha')");
}

?>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; charset=iso-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
    <title>Recuperação de senha</title>
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body class="ext-safari">

    <form id="login" name="login" method="post" action="#" style="padding-left: 25%;">
        <div class="container-fluid">
            <div class="row text-right" style="margin-top: 20px"></div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2"></div>
                <div class="col-md-8 no-gutters"><span id="titulo-login">Trocar<span class="cor-laranja"> Senha</span></span></div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="min-height: 60px;">
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container-fluid" id="form-login">
            <div class="row" style="height: 20px;"></div>
            <div class="row" style="height: 70px;">
                <div class="col-md-2"></div>
                <div class="col-md-3 form-field">
                    <input type="text" class="form-input" name="email" id="email" placeholder="Email" required>
                    <i><img src="images/user-solid.svg" width="20" height="20"></i>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="height: 70px; margin-top: 30px;">
                <div class="col-md-2"></div>
                <div class="col-md-3 form-field">
                    <input type="password" class="form-input" name="senha" id="senha" placeholder="Senha" required="required"><i><img src="images/key-solid.svg" width="20" height="20"></i>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="height: 70px; margin-top: 30px;">
                <div class="col-md-2"></div>
                <div class="col-md-3 form-field">
                    <input type="password" class="form-input" name="senha" id="senha" placeholder="Confirmar senha" required="required"><i><img src="images/key-solid.svg" width="20" height="20"></i>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" style="margin-top: 30px; margin-left: 80px;">
                <div class="col-md-2"></div>
                <div class="col-md-5 no-gutters"><input type="submit" name="submit" class="btn btn-primary btn-form" value="Recuperar"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </form>

</body>

</html>
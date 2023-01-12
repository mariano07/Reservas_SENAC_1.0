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
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; charset=iso-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="https://apsweb.senacrs.com.br/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <title>Login - Sistema de Agendamentos</title>
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body class="ext-safari">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" id="login-esquerda">
                <div class="row" style="height: 100vh">
                    <div class="col-md-4 col-xs-12"></div>
                </div>
            </div>
            <div class="col-md-6">
                <form id="login" name="login" method="post" action="?">
                    <div class="container-fluid">
                        <div class="row text-right" style="margin-top: 20px"></div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 no-gutters"><span id="titulo-login">Agendamento de<span class="cor-laranja"> Salas</span></span></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="min-height: 60px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 no-gutters" style="min-height: 60px;">
                                <p id="texto-informacoes">
                                    <br>
                                </p>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <input type="hidden" name="usrLoginSalvo" id="usrLoginSalvo" value="">
                    <div class="container-fluid" id="form-login">
                        <div class="row" style="height: 20px;"></div>
                        <div class="row" style="height: 70px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field">
                                <input type="text" placeholder="Sua Matrícula" class="form-input" id="usr-login" name="usr" required="required" value="" tabindex="1"><i class="fas fa-user"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="height: 70px; margin-top: 30px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field">
                                <input type="password" placeholder="Senha" id="usr-password" class="form-input" name="passwd" required="required" onkeydown="javascript:checkEnter(event);" value="" tabindex="2"><i class="fas fa-lock"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" id="acoes-login">
                            <div class="col-md-7"></div>
                            <div class="col-md-3 no-gutters text-right"><a href="" class="cor-laranja">Esqueceu a senha?</a></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-5 no-gutters"><input type="button" value="Entrar" class="btn btn-primary btn-form" id="btnEntrar" onclick="" tabindex="4"></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="container-fluid" id="form-esqueci-senha">
                        <div class="row" style="height: 10px;"></div>
                        <div class="row" style="height: 70px; margin-bottom: 30px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field invalid">
                                <input type="text" placeholder="Sua Matrícula" class="form-input rec-required" id="usr-recuperacao" value="" tabindex="1"><i class="fas fa-user"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="height: 70px; margin-bottom: 20px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field">
                                <input type="email" placeholder="E-mail cadastrado" class="form-input rec-required" id="email-recuperacao" value="" tabindex="3"><i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="margin-top:25px">
                            <div class="col-md-2"></div>
                            <div class="col-md-6 no-gutters"><input type="button" value="Enviar" class="btn btn-primary btn-form" id="btnEnviar" onclick="" disabled="" tabindex="4"></div>
                            <div class="col-md-2 text-right no-gutters" style="height: 60px; padding-top: 20px; font-size: 13px;"><a href="javascript:retornarLogin()" class="cor-laranja">Cancelar</a></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <input type="hidden" name="base" id="baseSelecionada" value="PHOENIXHA/GVDASA_GVCOLLEGE"><input type="hidden" name="postBack" value="1"><input type="hidden" name="acao" value="login"><input type="hidden" name="ViewLoginXmlXsl[method]" value="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
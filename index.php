<?php
session_start();
require_once('conexao.php');

if (isset($_POST['btn_entrar'])) {
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    try {
        $sql = $con->query("CALL `proc_login` ('$matricula','$senha')"); //busca no banco 
            $aux_query = $sql->fetch_assoc();
            if ($aux_query['permissao']==='ADM') {
                $_SESSION['id_user'] = $aux_query['id'];
                $_SESSION['user'] = $aux_query['nome'];
                $_SESSION['permissao'] = $aux_query['permissao'];
                $_SESSION['email'] = $aux_query['email'];
                header("Location: minhas_reservas.php"); //redireciona adm
            }else if($aux_query['permissao']==='PED'){
                $_SESSION['id_user'] = $aux_query['id'];
                $_SESSION['user'] = $aux_query['nome'];
                $_SESSION['permissao'] = $aux_query['permissao'];
                $_SESSION['email'] = $aux_query['email'];
                header("Location: minhas_reservas.php"); //redireciona pedagogico
            }else if($aux_query['permissao']==='USE'){
                $_SESSION['id_user'] = $aux_query['id'];
                $_SESSION['user'] = $aux_query['nome'];
                $_SESSION['permissao'] = $aux_query['permissao'];
                $_SESSION['email'] = $aux_query['email'];
                header("Location: minhas_reservas.php"); //redireciona professor
        } //guarda os dados na aux_query
    } catch (Exception $e) {
        header("Location: index.php"); //atualiza a pagina com erro
    }
} 
?>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; charset=iso-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
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
                <form action="#" method="post">
                    <div class="container-fluid">
                        <div class="row text-right" style="margin-top: 20px"></div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 no-gutters"><span id="titulo-login">Agendamento de<span class="cor-laranja"> Salas</span></span></div>
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
                            <div class="col-md-8 form-field">
                                <input type="text" class="form-input" name="matricula" id="matricula" placeholder="Sua Matrícula" required><i><img src="images/user-solid.svg" width="20" height="20"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="height: 70px; margin-top: 30px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field">
                                <input type="password" class="form-input" name="senha" id="senha" placeholder="Senha" required="required"><i><img src="images/key-solid.svg" width="20" height="20"></i>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div style="padding-top: 15px; color: red;" align="center">
                        <?php
                            if(!empty($_GET['user']) || !empty($_GET['passwd'])){      
                        ?>
                            Usuário ou Senha Inválidos
                        <?php
                           }
                        ?>
                        </div>
                        <div class="row" id="acoes-login">
                            <div class="col-md-7"></div>
                            <div class="col-md-3 no-gutters text-right"><a href="recuperar_senha.php" class="cor-laranja">Esqueceu a senha?</a></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-5 no-gutters"><input type="submit" name="btn_entrar" class="btn btn-primary btn-form" value="Entrar"></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
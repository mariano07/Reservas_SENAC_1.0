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
    <title>Login - Portal Acadêmico</title>
    <link href="https://apsweb.senacrs.com.br/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
    <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
</head>

<body onload="init();" class="  ext-safari">
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
                    <div class="container-fluid" id="form-logins-armazenados">
                        <div class="row" style="height: 10px;"></div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 no-gutters">
                                <h3>Logins Armazenados</h3>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 no-gutters text-right"><a href="javascript:exibirLogin();" class="hiperlink-login cor-laranja">Fazer login com outro usuário</a></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <input type="hidden" name="usrLoginSalvo" id="usrLoginSalvo" value="">
                    <div class="container-fluid" id="form-login">
                        <div class="row" style="height: 20px;"></div>
                        <div class="row" style="height: 70px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field">
                                <input type="text" placeholder="Matrícula ou CPF" class="form-input" id="usr-login" name="usr" required="required" value="" tabindex="1"><i class="fas fa-user"></i>
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
                            <div class="col-md-2"></div>
                            <div class="col-md-5 no-gutters">
                                <input type="checkbox" value="1" name="lembrarme" id="lembrarme" tabindex="3"><label for="lembrarme" id="lbl-lembrarme"> Lembrar meu login</label>
                            </div>
                            <div class="col-md-3 no-gutters text-right"><a href="javascript:recuperacaoSenha();" class="cor-laranja">Esqueceu a senha?</a></div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-5 no-gutters"><input type="button" value="Entrar" class="btn btn-primary btn-form" id="btnEntrar" onclick="fazerLogin();" tabindex="4"></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="container-fluid" id="form-esqueci-senha">
                        <div class="row" style="height: 10px;"></div>
                        <div class="row" style="height: 70px; margin-bottom: 30px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 form-field invalid">
                                <input type="text" placeholder="Matrícula ou CPF" class="form-input rec-required" id="usr-recuperacao" value="" tabindex="1"><i class="fas fa-user"></i>
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
                            <div class="col-md-6 no-gutters"><input type="button" value="Enviar" class="btn btn-primary btn-form" id="btnEnviar" onclick="recuperarSenha();" disabled="" tabindex="4"></div>
                            <div class="col-md-2 text-right no-gutters" style="height: 60px; padding-top: 20px; font-size: 13px;"><a href="javascript:retornarLogin()" class="cor-laranja">Cancelar</a></div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <input type="hidden" name="base" id="baseSelecionada" value="PHOENIXHA/GVDASA_GVCOLLEGE"><input type="hidden" name="postBack" value="1"><input type="hidden" name="acao" value="login"><input type="hidden" name="ViewLoginXmlXsl[method]" value="login">
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/u35fw2Dx4G0WsO6SztVYg4cV/recaptcha__pt_br.js" crossorigin="anonymous" integrity="sha384-NZ1Uh58EGKoNhrQv8LxZOW67A5l7mlGk/ffJnhn0w3oRHo0xYvd9NB3XIqQsozOI"></script>
    <script type="text/javascript" src="https://apsweb.senacrs.com.br/lib/system/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://apsweb.senacrs.com.br/lib/system/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/system/js/validar.js?380060"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/shared/js/gvBrowserDetect.js?380060"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/shared/js/gvCheckNavHomologados.js?380060"></script>
    <script type="text/javascript" language="javascript" src="views/Login/document.view.Login.js?380060"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/system/js/lib.js?380060"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/system/js/extjs/adapter/ext/ext-base.js"></script>
    <script type="text/javascript" language="javascript" src="https://apsweb.senacrs.com.br/lib/system/js/extjs/ext-all.js"></script>
    <script type="text/javascript" language="javascript">
        var siteKey = '';
        var sending = false;

        function init() {
            gvCheckNavHomologado.checkBrowserCompatible(gvBrowserDetect.browser, gvBrowserDetect.version, gvBrowserDetect.iEVersion);
        }

        function fazerLogin() {
            if (!sending) {
                sending = true;
                document.forms['login'].elements['ViewLoginXmlXsl[method]'].value = 'btnLogin_click';
                document.forms['login'].elements['passwd'].value = encodeBase64(document.forms['login'].elements['passwd'].value);
                hashFormulario('login');
                document.forms['login'].submit();
            }
        }

        function RemoveLogin(IdLogin) {
            document.forms['login'].elements['ViewLoginXmlXsl[method]'].value = 'btnRemoveLogin_click';
            document.forms['login'].elements['usrLoginSalvo'].value = IdLogin;
            hashFormulario('login');
            document.forms['login'].submit();
        }

        function checkEnter(e) {
            var characterCode = "";

            if (e && e.which) {
                e = e;
                characterCode = e.which;
            } else {
                e = event;
                characterCode = e.keyCode;
            }

            if (characterCode == 13) {
                fazerLogin();
            }
            return true
        }
    </script>
</body>

</html>
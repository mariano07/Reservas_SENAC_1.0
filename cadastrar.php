<?php
session_start();
require_once('conexao.php');
include('email.php');
$_SESSION['user']='arthur';
$_SESSION['email'] = 'arthurrapach06@gmail.com';
if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $matricula = $_POST['matricula'];
  $senha = $_POST['senha'];
  $cargo = $_POST['cargo'];
  $con->query("CALL `proc_cadastrar` ('$nome','$telefone','$email','$matricula','$senha','$cargo','ADM')");
  $phpmailer = new email;

  $phpmailer->confirma_cadastro_usuario($nome, $email);
  $phpmailer->confirma_cadastro_adm($_SESSION['user'],$_SESSION['email'],$nome);
}
  
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
  <title>Cadastro</title>
  <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
  <link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
  <link href="js/checkout.css" rel="stylesheet">
</head>

<body class="bg-light" style="background: white;"><br><br><br>
  <div class="container">
    <main>
      <div class="py-2 text-center">
      <div class="centralizar" style="padding-top: 50px; margin-left: 100%;"></div>
      <h2 class="titulo">Cadastro</h2>
      <div class="col-md-7 col-lg-3">
        <form class="needs-validation" novalidate action="#" method="post">
      </div>

    <table>
      <tr>
      <td>
      
        <div class="invalid-feedback">
          <label for="nome" class="form-label">Nome</label>
          <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 11px;" type="text" class="form-control" name="nome" placeholder="Nome" value="" required/>
      </td>
          
          <br>
      <td>
        <div class="col-12">
          <label for="matricula" class="form-label" style=" margin-left: 60px;">Mátricula</label>
          <span class="input-group-text"></span>
          <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 42px;" type="text" class="form-control" name="matricula" placeholder="matricula" required/>
      
        </div>
      </td>
      </tr>
    </table>

    <table>
      <tr>
      <td>
          <br>
          <div class="col-12">
            <label for="email" class="form-label">E-mail</label>
            <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 11px;" type="text" class="form-control" name="email" placeholder="seu@exemplo.com" required/>
      </td>
          </div>
      <td>
          <br>
          <div class="col-12">
            <label for="telefone" class="form-label" style=" margin-left: 60px;">Telefone</label>
            <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 42px;" type="tel" maxlength="15" class="form-control" name="telefone" placeholder="(xx) 9xxxx-xxxx" required/>

          </div>
      </td>
      </tr>
    </table>

    <table>
      <tr>
      <td>
          <br>
          <div class="col-12">
            <label for="senha" class="form-label">Senha</label>
            <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 11px;" type="password" class="form-control" name="senha" placeholder="*****" required/>
          </div>
      </td>

      <td>
          <br>
          <div class="col-12">
            <label for="cargo" class="form-label" style=" margin-left: 60px;">Cargo</label>
            <input style="padding: 20px; box-shadow: 0.3em 0.3em 1em rgba(0, 0, 0, 0.3); margin-left: 42px;" type="text" class="form-control" name="cargo" placeholder="Curso" required/>
          </div>
          </div>
      </td>
      </tr>
      </table>
          <br>
        
          <br>
          <div class="col-md-5 no-gutters"><input style="margin-left: 170px; margin-bottom: 50px;"type="submit" name="submit" class="btn btn-warning btn-form" value="Proximo"></div>
          </div>
          </form>
        </div>
      </div>
    </main>
    <br>
    <br>
    <br>
  </div>
</body>
</html>
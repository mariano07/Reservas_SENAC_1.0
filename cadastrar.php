<?php
// session_start();
// require_once('conexao.php');

// if (isset($_POST['cadastrar'])) {
//   $nome = $_POST['nome'];
//   $telefone = $_POST['telefone'];
//   $email = $_POST['email'];
//   $matricula = $_POST['matricula'];
//   $senha = $_POST['senha'];
//   $curso = $_POST['curso'];
//   try {
//    $con->query("INSERT INTO `usuarios`(`nome`, `telefone`, `email`, `maticula`, `senha`, `cargo`, `permissao`) VALUES ('$nome','$telefone','$email','$matricula','$senha','Professor','USE')");

//   } catch (Exception $e) {
//     header("Location: http://localhost/Reservas_SENAC_1.0/index.php?user=error"); //atualiza a pagina com erro
//   }
// }
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

<body class="bg-light" style="background: #e5e5e5;"><br><br><br>
  <div class="container" style=" background: white; max-width: 560px;">
    <main>
      <div class="py-2 text-center">

        <div class="centralizar" style="padding-top: 50px; margin-left: 100%;">
        </div>
        <div class="col-md-7 col-lg-7">
          <form action="#" method="post">
        </div>

        <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome" value="" required>
              <div class="invalid-feedback">
              </div>
              <br>
              <div class="col-12">
                <label for="username" class="form-label">Mátricula</label>
                <div class="input-group has-validation">
                  <span class="input-group-text"></span>
                  <input type="text" class="form-control" name="matricula" placeholder="Mátricula" required>
                  <div class="invalid-feedback">

                  </div>
                </div>
              </div>
              <br>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
                <div class="invalid-feedback">

                </div>
              </div>
              <br>
              <div class="col-12">
                <label for="address" class="form-label">Curso</label>
                <input type="text" class="form-control" name="curso" placeholder="Inglês" required>
                <div class="invalid-feedback">
                </div>
              </div>
              <br>
              <hr class="my-4">
              <br>
              <div class="col-md-7"></div>
              <div class="col-md-5 no-gutters"><input type="submit" name="cadastrar" class="btn btn-warning btn-form" value="Cadastrar"></div>
              <div class="col-md-3"></div>
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
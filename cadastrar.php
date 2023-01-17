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
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="js/checkout.css" rel="stylesheet">
</head>

<body class="bg-light"><br><br><br>
  <div class="container" style="padding-left: 20%; padding-top: 8%;">
    <main>
      <div class="py-2 text-center">

      </div>
      <div class="col-md-7 col-lg-7">
        <form class="needs-validation" novalidate>

      </div>

      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Nome</label>
          <input type="text" class="form-control" id="firstName" placeholder="Nome" value="" required>
          <div class="invalid-feedback">
          </div>
          <br>
          <div class="col-12">
            <label for="username" class="form-label">Mátricula</label>
            <div class="input-group has-validation">
              <span class="input-group-text"></span>
              <input type="text" class="form-control" id="username" placeholder="matricula" required>
              <div class="invalid-feedback">

              </div>
            </div>
          </div>
          <br>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="seu@example.com">
            <div class="invalid-feedback">

            </div>
          </div>
          <br>
          <div class="col-12">
            <label for="address" class="form-label">Curso</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
            </div>
          </div>
          <br>
          <hr class="my-4">
          <br>
          <div class="col-md-3"></div>
          <div class="col-md-5 no-gutters"><input type="submit" class="btn btn-warning btn-form" value="Proximo"></div>
          <div class="col-md-3"></div>
          </form>
        </div>
      </div>
    </main>
    <br>
    <br>
    <br>
  </div>
  <script src="js/checkout.js"></script>
</body>

</html>
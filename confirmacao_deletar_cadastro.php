<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
  <title>Confirmação de reserva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/confirmacao.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>

      <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
        <path
           d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
        </symbol>

      <symbol id="bookmark-star" viewBox="0 0 16 16">
        <path
         d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
      </symbol>

      <symbol id="grid-fill" viewBox="0 0 16 16">
        <path
        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
      </symbol>

  </svg>



  <form action="#" method="post">
    <div class="b-example-divider"></div>

    <div class="modal modal-tour position-static d-block py-5" tabindex="-1" role="dialog" id="modalTour">
      <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-body p-5">
            <h2 class="fw-bold mb-0">Deletar cadastros</h2>
            <hr>
            <ul class="d-grid gap-4 my-5 list-unstyled">
              <li class="d-flex gap-4">
                <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                  <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                  <h5 class="mb-0">Nome</h5>
                    <?php echo $_SESSION['user']; ?>
                  </h5>
                  " "
                </div>
              </li>
              <li class="d-flex gap-4">
                <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                  <use xlink:href="#grid-fill" />
                </svg>
                <div>
                  <h5 class="mb-0">Matrícula</h5>
                  "
                  <?php echo $data; ?>"
                </div>
              </li>
              <li class="d-flex gap-4">
                <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                  <use xlink:href="#bookmark-star" />
                </svg>
                <div>
                  <h5 class="mb-0">Cargo</h5>
                  "
                  <?php echo $hora; ?>"
                </div>
              </li>
            </ul>
            <hr>
            <div class="row" style="margin-top: 30px; margin-left: 25px;">
              <div class="col-md-1"></div>
              <div class="col-md-5 no-gutters"><input type="submit" class="btn btn-primary btn-form"
                  name="btn_confirmar" value="Deletar"></div>
              <div class="col-md-2"></div>
            </div>
  </form>

  <div class="row" style="margin-top: 30px; margin-left: 25px;">
    <div class="col-md-1"></div>
    <div class="col-md-5 no-gutters"><a href="minhas_reservas.php"><button type="button" class="btn btn-primary btn-form"
          data-bs-dismiss="modal">Cancelar</button></a>
      <div class="col-md-2"></div>
    </div>
  </div>
  </div>
  </div>

  <div class="b-example-divider"></div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"></script>
  </footer>

</body>

</html>
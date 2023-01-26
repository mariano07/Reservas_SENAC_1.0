<?php
  session_start();
 $data = $_POST['data'];
 $hora = $_POST['hora'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Confirmação</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/confirmacao.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>

    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
    </symbol>

    <symbol id="bookmark-star" viewBox="0 0 16 16">
    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
    </symbol>

    <symbol id="grid-fill" viewBox="0 0 16 16">
    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
    </symbol>

    <symbol id="film" viewBox="0 0 16 16">
    <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
    </symbol>
  </svg>



  <form action="" method="post">
  <div class="b-example-divider"></div>

  <div class="modal modal-tour position-static d-block py-5" tabindex="-1" role="dialog" id="modalTour">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-body p-5">
          <h2 class="fw-bold mb-0">Confirmar reserva</h2>
          <hr>
          <ul class="d-grid gap-4 my-5 list-unstyled">
            <li class="d-flex gap-4">
              <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                <use xlink:href="#exclamation-triangle-fill" />
              </svg>
              <div>
                <h5 class="mb-0"><?php echo $_SESSION['nome']; ?></h5>
                " "
              </div>
            </li>
            <li class="d-flex gap-4">
              <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                <use xlink:href="#grid-fill" />
              </svg>
              <div>
                <h5 class="mb-0">data</h5>
                "<?php echo $data; ?>"
              </div>
            </li>
            <li class="d-flex gap-4">
              <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                <use xlink:href="#bookmark-star" />
              </svg>
              <div>
                <h5 class="mb-0">Hora</h5>
                "<?php echo $hora; ?>"
              </div>
            </li>
            <li class="d-flex gap-4">
              <svg class="bi text-primary flex-shrink-0" width="48" height="48">
                <use xlink:href="#film" />
              </svg>
              <div>
                <h5 class="mb-0">Sala</h5>
                "<?php echo $_SESSION['sala'];?>"
              </div>
            </li>
          </ul>
          <hr>
          <div class="row" style="margin-top: 30px; margin-left: 25px;">
                <div class="col-md-1"></div>
                <div class="col-md-5 no-gutters"><input type="submit" class="btn btn-primary btn-form" value="Proximo"></div>
                <div class="col-md-2"></div>
            </div>
        </form>

        <div class="row" style="margin-top: 30px; margin-left: 25px;">
        <div class="col-md-1"></div>
        <div class="col-md-5 no-gutters"><a href="reservar_sala.php"><button type="button" class="btn btn-primary btn-form" data-bs-dismiss="modal">Cancelar</button></a>
        <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </footer>

</body>

</html>
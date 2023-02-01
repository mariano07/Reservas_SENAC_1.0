<?php
session_start();
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
    <?php
    if ($_SESSION['permissao'] === "ADM") {
        echo '<title>Dashboard Admin</title>';
    } else if ($_SESSION['permissao'] === "PED") {
        echo '<title>Dashboard Pedagógico</title>';
    } else if ($_SESSION['permissao'] === "USE") {
        echo '<title>Dashboard Professor</title>';
    } else {
        header("Location:index.php");
    }
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
    <form action="#" method="post">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Bem vindo(a)
                <?php echo $_SESSION['user'] ?>
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-white w-100 rounded-0 border-0" type="text"
                placeholder="Procurar por Professor/Sala/Andar" aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <button type="submit" name="btn_pesquisar" class="btn btn-dark">Pesquisar</button>
                </div>
            </div>
        </header>
    </form>
    <?php
    if ($_SESSION['permissao'] === "ADM") {
        echo '<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="todas_reservas.php">
                <span data-feather="calendar" class="align-text-bottom"></span>
                Todas Reservas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="minhas_reservas.php">
                <span data-feather="bookmark" class="align-text-bottom"></span>
                Minhas Reservas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservar_sala.php">
                <span data-feather="edit-3" class="align-text-bottom"></span>
                Reservar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="usuarios.php" >
                <span data-feather="user" class="align-text-bottom"></span>
                Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="inventario.php">
                <span data-feather="edit" class="align-text-bottom"></span>
                Alterar inventário
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recuperar_senha.php">
                <span data-feather="lock" class="align-text-bottom"></span>
                Mudar Senha
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="log-out" class="align-text-bottom"></span>
                Sair
              </a>
            </li>
          </ul>
        </div>
      </nav>';
    } else if ($_SESSION['permissao'] === "PED") {
        echo '<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="todas_reservas.php">
                <span data-feather="calendar" class="align-text-bottom"></span>
                Todas Reservas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="minhas_reservas.php">
                <span data-feather="bookmark" class="align-text-bottom"></span>
                Minhas Reservas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservar_sala.php">
                <span data-feather="edit-3" class="align-text-bottom"></span>
                Reservar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="usuarios.php" >
                <span data-feather="user" class="align-text-bottom"></span>
                Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="inventario.php">
                <span data-feather="edit" class="align-text-bottom"></span>
                Alterar inventário
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recuperar_senha.php">
                <span data-feather="lock" class="align-text-bottom"></span>
                Mudar Senha
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="log-out" class="align-text-bottom"></span>
                Sair
              </a>
            </li>
          </ul>
        </div>
      </nav>';
    } else if ($_SESSION['permissao'] === "USE") {
        header("Location:minhas_reservas.php");
    } else {
        header("Location:index.php");
    }
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 id='titulo' class="h2">Reservas</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" id="">Sala</th>
                        <th scope="col" id="">Computadores</th>
                        <th scope="col" id="">Computador Professor</th>
                        <th scope="col" id="">Monitores</th>
                        <th scope="col" id="">Mouses</th>
                        <th scope="col" id="">Teclados</th>
                        <th scope="col" id="">Mesas</th>
                        <th scope="col" id="">Cadeiras</th>
                        <th scope="col" id="">Televisões</th>
                        <th scope="col" id="">Ar Condicionado</th>
                        <th scope="col" id="">Controle Ar</th>
                        <th scope="col" id="">Data Show</th>
                        <th scope="col" id="">Apagador</th>
                        <th scope="col" id="">Canetão</th>
                        <th scope="col" id="">Webcam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $con->query("SELECT * FROM `view_salas`");
                    $aux_query = $sql->fetch_assoc();

                    while ($aux_query = $sql->fetch_assoc()) {
                        $controle = $aux_query['canetao_azul'] + $aux_query['canetao_preto'] + $aux_query['canetao_vermelho'];
                        echo "<tr>";
                        echo '<td>' . $aux_query['numero'] . "</td>";
                        echo "<td>" . $aux_query['computador'] . "</td>";
                        echo "<td>" . $aux_query['computador_prof'] . "</td>";
                        echo "<td>" . $aux_query['monitor'] . "</td>";
                        echo "<td>" . $aux_query['mouse'] . "</td>";
                        echo "<td>" . $aux_query['teclado'] . "</td>";
                        echo "<td>" . $aux_query['mesa'] . "</td>";
                        echo "<td>" . $aux_query['cadeira'] . "</td>";
                        echo "<td>" . $aux_query['televisao'] . "</td>";
                        echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
                        echo "<td>" . $aux_query['controle_ar'] . "</td>";
                        echo "<td>" . $aux_query['data_show'] . "</td>";
                        echo "<td>" . $aux_query['apagador'] . "</td>";
                        echo "<td>" . $controle . "</td>";
                        echo "<td>" . $aux_query['webcam'] . "</td>";
                        echo '<td><button type="button" class="btn btn-danger">Deletar</button></td>';
                        echo '<td><button type="button" class="btn btn-primary">Editar</button></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>
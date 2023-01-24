<?php
session_start();
require_once('conexao.php');
$id = 'arthur';

if (isset($_POST['btn_pesquisar'])) {
  // $sql = $con->query("SELECT * FROM reservas WHERE id = '$id'");
  // $aux_query = $sql->fetch_assoc();

  // while ($aux_query = $sql->fetch_assoc()){
  //   echo "<script>

  //   function minhasReservas(){

  //   document.getElementById('professor').textContent =" . $aux_query['professor'];
  //   echo "document.getElementById('andar').textContent =". $aux_query['andar'];
  //   echo "document.getElementById('sala').textContent =" .$aux_query['sala'];
  //   echo "document.getElementById('data').textContent =" .$aux_query['data'];
  //   echo "document.getElementById('hora').textContent =" .$aux_query['horario'];

  //   "}
  //   </script>";
  // }
}
  // $sql = $con->query("SELECT * FROM reservas WHERE id = '$id'");
  // $aux_query = $sql->fetch_assoc();

  // while ($aux_query = $sql->fetch_assoc()){
  //   echo "<script>

  //   function minhasReservas(){

  //   document.getElementById('professor').textContent =" . $aux_query['professor'];
  //   echo "document.getElementById('andar').textContent =". $aux_query['andar'];
  //   echo "document.getElementById('sala').textContent =" .$aux_query['sala'];
  //   echo "document.getElementById('data').textContent =" .$aux_query['data'];
  //   echo "document.getElementById('hora').textContent =" .$aux_query['horario'];

  //   "}
  //   </script>";
  // }

  echo '<script> 
  function listarUsuarios(){
    alert("listar usuarios");
  }
  </script>';

  echo '<script> 
  function mostrarInventario(){
    alert("inventario");
  }
  </script>';

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
  <title>Dashboard Pedagógico</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <form action="#" method="post">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Bem vindo(a) *código php*</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-white w-100 rounded-0 border-0" type="text" placeholder="Procurar professor" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <button type="submit" name="btn_pesquisar" class="btn btn-dark" onclick="Pesquisar()">Pesquisar</button>
        </div>
      </div>
    </header>
  </form>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" onclick="verReservas()">
                <span data-feather="calendar" class="align-text-bottom"></span>
                Todas Reservas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="minhasReservas()">
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
              <a class="nav-link" aria-current="page" href="#" onclick="listarUsuarios()">
                <span data-feather="user" class="align-text-bottom"></span>
                Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" onclick="mostrarInventario()">
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
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 id='titulo' class="h2">Reservas</h1>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Professor</th>
                <th scope="col">Andar</th>
                <th scope="col">Sala</th>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="professor">Mariano</td>
                <td id="andar">1</td>
                <td id="sala">102</td>
                <td id="data">01/01/2023</td>
                <td id="hora">13:00</td>
                <td><button type="button" class="btn btn-danger">Deletar</button></td>
                <td><button type="button" class="btn btn-primary">Editar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>
  <script>
    // function minhasReservas() {
    //   document.getElementById("titulo").textContent = "Minhas Reservas";
    //   document.getElementById("professor").textContent = "Minhas Reservas";
    //   document.getElementById("andar").textContent = "Minhas Reservas";
    //   document.getElementById("sala").textContent = "Sala";
    //   document.getElementById("data").textContent = "Minhas Reservas";
    //   document.getElementById("hora").textContent = "Minhas Reservas";


    // }

    function verReservas() {
      document.getElementById("titulo").textContent = "Reservas";
      document.getElementById("professor").textContent = "Reservas";
      document.getElementById("andar").textContent = "Reservas";
      document.getElementById("sala").textContent = "Sala";
      document.getElementById("data").textContent = "Reservas";
      document.getElementById("hora").textContent = "Reservas";
    }
  </script>
</body>

</html>
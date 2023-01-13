<?php
    session_start();

    // $servername="localhost";
    // $database="reservassenac";
    // $username="root";
    // $password="root";

    // $con = mysqli_connect($servername, $username, $password, $database);

    // if(!$con){              
    //     mysqli_connect_error();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/dashboard_pedagoga.css">
  
</head>
<body>

<header>
<div class="sidebar active">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus' style="font-size: 30px;"></i>
                <div class="logoname" style="margin-left: 5px;">Bem-Vindo</div>
            </div>
            <i class='bx bx-menu-alt-right' id="btn" style="font-size: 25px;"></i>
        </div>
        <hr>
        <ul class="nav_list">
        <li>
                <a href="#">
                    <i class='bx bx-chat' ></i>
                    <span class="link_names">Minhas Reservas</span>
                </a>
                <span class="tooltip">Minhas Reservas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_names">Reservar</span>
                </a>
                <span class="tooltip">Reservar</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="link_names">Trocar senha</span>
                </a>
                <span class="tooltip">Trocar senha</span>
            </li>
            
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="link_names">Sair</span>
                </a>
                <span class="tooltip">Sair</span>
            </li>     
        </ul>
    </div>
</header>

<main>
<table class="table table-light table-striped-columns">
<thead>
    <tr>
      <th scope="col">Andar</th>
      <th scope="col">Sala</th>
      <th scope="col">Professor</th>
	  <th scope="col">Menu</th>
    </tr>
  </thead>
  <tbody>
	<tr>
      <th scope="row">ID</th>
      <th scope="col">Andar</th>
      <th scope="col">Sala</th>
      <th scope="col">Professor</th>
	  <td><button type="button" class="btn btn-dark">Deletar</button></td>  
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"><br></td>
      <td></td>
	  <td></td>
    </tr>
  </tbody>
</table>	
</main>
<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search")

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

</footer>

</body>
</html>
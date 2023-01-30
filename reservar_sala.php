<?php
session_start();
require('conexao.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
	<title>Escolha de Sala</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
</head>
<style>
	body {
		background-color: rgb(224, 224, 224);
	}

	.nav-link {
		font-size: medium;
	}
</style>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-primary bg-light static-top">
			<div class="container">
				<a class="navbar" href="#">
					<img src="images/logo-senac.png" alt="Logo Senac" height="45" width="100%">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<strong><a class="nav-link active text-primary" aria-current="page" href="#">Reservar
									Sala</a></strong>
						</li>
						<li class="nav-item">
							<strong><a class="nav-link text-primary" href="#">Painel de Controle</a></strong>
						</li>
						<li class="nav-item">
							<strong><a class="nav-link text-primary" href="#">Sair</a></strong>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="align-center" style="margin: 1rem;">
		<div class="row">
			<main style="padding-top:20px; ">
				<?php
				if (isset($_POST['andar'])) {
					switch ($_POST['andar']) {
						case '1':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('1')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 1 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
												<form action="reservar_data.php" method="post">
												<input type="hidden" name="sala" value="' . $aux_query['sala'] . '">
												<input class="btn btn-success" type="submit" name="submit" value="Reservar">
												</form>
												</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
						case '2':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('2')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 2 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
						case '3':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('3')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 3 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
						case '4':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('4')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 4 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
						case '5':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('5')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 5 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
						case '6':
							?>
							<div class="table-responsive">
								<table class="table table-striped table-sm table-bordered">
									<thead>
										<tr>
											<th scope="col">SALAS</th>
											<th scope="col" id="">Andar</th>
											<th scope="col" id="">Computadores</th>
											<th scope="col" id="">Computador Professor</th>
											<th scope="col" id="">Monitores</th>
											<th scope="col" id="">Mouses</th>
											<th scope="col" id="">Teclados</th>
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
										$sql = $con->query("CALL `proc_salas_andar` ('6')");
										$aux_query = $sql->fetch_assoc();

										while ($aux_query = $sql->fetch_assoc()) {
											echo "<tr>";
											echo '<td>' . $aux_query['id_sala'] . "</td>";
											echo "<td> 6 </td>";
											echo "<td>" . $aux_query['computador'] . "</td>";
											echo "<td>" . $aux_query['computador_prof'] . "</td>";
											echo "<td>" . $aux_query['monitor'] . "</td>";
											echo "<td>" . $aux_query['mouse'] . "</td>";
											echo "<td>" . $aux_query['teclado'] . "</td>";
											echo "<td>" . $aux_query['televisao'] . "</td>";
											echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
											echo "<td>" . $aux_query['controle_ar'] . "</td>";
											echo "<td>" . $aux_query['data_show'] . "</td>";
											echo "<td>" . $aux_query['apagador'] . "</td>";
											echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
											echo "<td>" . $aux_query['webcam'] . "</td>";
											echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
							<?php
							break;
					}
				} else {
					?>
					<div class="table-responsive">
						<table class="table table-striped table-sm table-bordered">
							<thead>
								<tr>
									<th scope="col">SALAS</th>
									<th scope="col" id="">Andar</th>
									<th scope="col" id="">Computadores</th>
									<th scope="col" id="">Computador Professor</th>
									<th scope="col" id="">Monitores</th>
									<th scope="col" id="">Mouses</th>
									<th scope="col" id="">Teclados</th>
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
								$sql = $con->query("CALL `proc_salas_andar` ('1')");
								$aux_query = $sql->fetch_assoc();

								while ($aux_query = $sql->fetch_assoc()) {
									echo "<tr>";
									echo '<td>' . $aux_query['id_sala'] . "</td>";
									echo "<td> 1 </td>";
									echo "<td>" . $aux_query['computador'] . "</td>";
									echo "<td>" . $aux_query['computador_prof'] . "</td>";
									echo "<td>" . $aux_query['monitor'] . "</td>";
									echo "<td>" . $aux_query['mouse'] . "</td>";
									echo "<td>" . $aux_query['teclado'] . "</td>";
									echo "<td>" . $aux_query['televisao'] . "</td>";
									echo "<td>" . $aux_query['ar_condicionado'] . "</td>";
									echo "<td>" . $aux_query['controle_ar'] . "</td>";
									echo "<td>" . $aux_query['data_show'] . "</td>";
									echo "<td>" . $aux_query['apagador'] . "</td>";
									echo "<td>" . $aux_query['canetao_vermelho'] + $aux_query['canetao_preto'] + $aux_query['canetao_azul'] . "</td>";
									echo "<td>" . $aux_query['webcam'] . "</td>";
									echo '<td>
									<form action="reservar_data.php" method="post">
									<input type="hidden" name="sala" value="' . $aux_query['id_sala'] . '">
									<input class="btn btn-success" type="submit" name="submit" value="Reservar">
									</form>
									</td>';
									echo "</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
					<?php
				}
				?>
				<center>
					<form method="post" action="#">
						<a href="dashboard.php" class="btn btn-primary">Voltar</a>
						<input type="submit" class="btn btn-primary" name="andar" value="1">
						<input type="submit" class="btn btn-primary" name="andar" value="2">
						<input type="submit" class="btn btn-primary" name="andar" value="3">
						<input type="submit" class="btn btn-primary" name="andar" value="4">
						<input type="submit" class="btn btn-primary" name="andar" value="5">
					</form>

				</center>
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
</body>

</html>
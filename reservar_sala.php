<?php
session_start();
$controle = 1;
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
	<title>Escolha de Sala</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
	<div class="align-center container">
		<div class="row">
			<main>
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
				<a href="#"><img src="images/arrow-left-circle-fill.svg" width="50" height="50"></a><h1 class="h2" id="andar"> Andar 1</h1>
				</div>
				<center>
					<button type="button" class="btn btn-primary" onclick="voltaAndar()"><- Voltar Andar</button>
					<button type="button" class="btn btn-primary" onclick="ProximoAndar()">Próximo Andar -></button>
				</center>
				<input type="hidden" id="controle" <?php echo "value = $controle" ?>>
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<thead>
							<tr>
								<th scope="col">SALAS</th>
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
								<th scope="col" id="">Canetão Azul</th>
								<th scope="col" id="">Canetão Vermelho</th>
								<th scope="col" id="">Canetão Preto</th>
								<th scope="col" id="">Webcam</th>
								<th scope="col" id="">Reserva</th>
							</tr>
						</thead>
						<tbody>
                    			<?php
								$variavel = "texto";
								$variavel1 = "SALA";
									for($y=0;$y<5;$y++){
										echo "<tr>";
										echo '<td>'.$variavel1."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo "<td>".$variavel."</td>";
										echo '<td>
										<form action="#" method="post">
										<input type="hidden" name="computador" value="'.$variavel.'">
										<input type="hidden" name="computador_professor" value="'.$variavel.'">
										<input type="hidden" name="monitor" value="'.$variavel.'">
										<input type="hidden" name="mouse" value="'.$variavel.'">
										<input type="hidden" name="teclado" value="'.$variavel.'">
										<input type="hidden" name="mesa" value="'.$variavel.'">
										<input type="hidden" name="cadeira" value="'.$variavel.'">
										<input type="hidden" name="televisao" value="'.$variavel.'">
										<input type="hidden" name="ar_condicionado" value="'.$variavel.'">
										<input type="hidden" name="ar_controle" value="'.$variavel.'">
										<input type="hidden" name="data_show" value="'.$variavel.'">
										<input type="hidden" name="apagador" value="'.$variavel.'">
										<input type="hidden" name="canetao_azul" value="'.$variavel.'">
										<input type="hidden" name="canetao_vermelho" value="'.$variavel.'">
										<input type="hidden" name="canetao_preto" value="'.$variavel.'">
										<input type="hidden" name="webcam" value="'.$variavel.'">
										<input class="btn btn-success" type="submit" name="submit" value="Reservar">
										</form>
										</td>';
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
	<script>
		function voltaAndar() {
			var andar = parseInt(document.getElementById("controle").value, 10);
			if (andar != 1) {
				andar -= 1;
				document.getElementById("controle").value = andar;
				document.getElementById("andar").textContent = "Andar " + andar;
			}
		}

		function ProximoAndar() {
			var andar = parseInt(document.getElementById("controle").value, 10);
			if (andar != 6) {
				andar += 1;
				document.getElementById("controle").value = andar;
				document.getElementById("andar").textContent = "Andar " + andar;

			}
		}
	</script>
</body>

</html>
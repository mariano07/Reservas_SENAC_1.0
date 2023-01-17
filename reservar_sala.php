<?php
session_start();
$controle = 1;
$dados = array();
for ($x = 0; $x <= 3; $x++) {
	for ($y = 0; $y <= 5; $y++) {
		$dados[$x][$y] = rand(1, 100);
	}
}
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
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2" id="andar"><a href="#"><img src="images/arrow-left-circle-fill.svg" width="50" height="50"></a> Andar 1</h1>
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
								<th scope="col">Item</th>
								<th scope="col" id="sala1">101</th>
								<th scope="col" id="sala2">102</th>
								<th scope="col" id="sala3">103</th>
								<th scope="col" id="sala4">104</th>
								<th scope="col" id="sala5">105</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Computadores</td>
								<td id="pc1">1</td>
								<td id="pc2">5</td>
								<td id="pc3">10</td>
								<td id="pc4">30</td>
								<td id="pc5">0</td>
							</tr>

							<tr>
								<td>Cadeiras</td>
								<td id="cd1">1</td>
								<td id="cd2">5</td>
								<td id="cd3">10</td>
								<td id="cd4">30</td>
								<td id="cd5">0</td>
							</tr>

							<tr>
								<td>Mesas</td>
								<td id="ms1">1</td>
								<td id="ms2">5</td>
								<td id="ms3">10</td>
								<td id="ms4">30</td>
								<td id="ms5">0</td>
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
	<script>
		function voltaAndar() {
			var andar = parseInt(document.getElementById("controle").value, 10);
			var x = 0,
				y = 0;
			if (andar != 1) {
				andar -= 1;
				document.getElementById("controle").value = andar;
				document.getElementById("andar").textContent = "Andar " + andar;
				document.getElementById("sala1").textContent = andar + "01";
				document.getElementById("sala2").textContent = andar + "02";
				document.getElementById("sala3").textContent = andar + "03";
				document.getElementById("sala4").textContent = andar + "04";
				document.getElementById("sala5").textContent = andar + "05";


			}
		}

		function ProximoAndar() {
			var andar = parseInt(document.getElementById("controle").value, 10);
			if (andar != 6) {
				andar += 1;
				document.getElementById("controle").value = andar;
				document.getElementById("andar").textContent = "Andar " + andar;
				document.getElementById("sala1").textContent = andar + "01";
				document.getElementById("sala2").textContent = andar + "02";
				document.getElementById("sala3").textContent = andar + "03";
				document.getElementById("sala4").textContent = andar + "04";
				document.getElementById("sala5").textContent = andar + "05";


			}
		}
	</script>
</body>

</html>
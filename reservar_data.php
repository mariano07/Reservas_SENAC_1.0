<?php
session_start();
if ($_SESSION['permissao'] == null) {
	header("Location: index.php");
}
$_SESSION['sala'] = $_POST['sala'];
$_SESSION['id_sala'] = $_POST['idsala']

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/index.css">
	<link href="images/senac_icone.png" type="image/x-icon" rel="shortcut icon">
	<title>Escolha da Data</title>
</head>

<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container1">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>

						<input type="hidden" value=>
						<div class="form-header" style="margin-left: 175px;">
							<img style="padding-left: 25%; padding-top: 5%;" src="images/senac_logo.png" style="width: 200px;">
						</div>
						<form action="confirmacao_reserva.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group" style="margin-top: 40px;">
										<span class="form-label">data</span>
										<input class="form-control" type="date" required name="data" id="data">
									</div>
								</div>
								<div class="col-md-6" style="margin-top: 40px;">
									<div class="form-group">
										<span class="form-label">Hora Inicio</span>
										<input class="form-control" type="time" required name="hora_inicio" id="hora">
									</div>
								</div>
								<div class="col-md-6" style="margin-top: 40px;">
									<div class="form-group">
										<span class="form-label">Hora final</span>
										<input class="form-control" type="time" required name="hora_fim" id="hora">
									</div>
								</div>
							</div>

							<div class="row" style="margin-left: 80px; margin-top: 20px;">
								<div class="col-md-2"></div>
								<div class="col-md-5 no-gutters"><input type="submit" class="btn btn-primary btn-form" value="proximo" name="proximo"></div>
								<div class="col-md-2"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
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
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reserva.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/lib/system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-all.css?380060" rel="stylesheet" type="text/css">
	<link href="https://apsweb.senacrs.com.br/resource/extjs/css/ext-overrides.css?380060" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/index.css">
	<title>Reserva</title>
</head>

<body>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="reservar_sala.php" method="POST">
							<div class="form-header">
								<img src="images/senac_logo.png" alt="">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">data</span>
										<input class="form-control" type="date" required name="data" id="data">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">hora</span>
										<input class="form-control" type="time" required name="hora" id="hora">
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-5 no-gutters"><input type="submit" class="btn btn-primary btn-form" value="Proximo"></div>
								<div class="col-md-2"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</body>

</html>
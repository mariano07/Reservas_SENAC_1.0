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
    <title>Reserva</title>
</head>
<body>
    
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="" method="POST">
							<div class="form-header">
								<h2><img src="images/senac_logo.png" alt=""><br> Bem-vindo</h2>
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
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Salas</span>			
										<div include="form-input-select()">
											<select required name="salas" id="salas">
												<option value="" hidden>Salas de aula</option>
												<option value="1">Option 1</option>
												<option value="2">Option 2</option>
												<option value="3">Option 3</option>
												<option value="4">Option 4</option>
												<option value="5">Option 5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<span class="form-label">Informe aqui os itens nescessarios na sala</span>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<textarea style="resize: none" id="story" name="story" rows="5" cols="44">
										</textarea>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn ">Agendar</button>
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
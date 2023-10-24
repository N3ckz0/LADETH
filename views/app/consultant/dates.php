<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Citas</title>
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<?php require "views/app/consultant/layout.php" ?>

	<main>
		<div class="container d-flex flex-column justify-content-center align-items-center">
			<!--Consultores-->
			<div class="col-12" style="margin-top: 100px; ">
				<h2 class="display-4 p-3">Citas Pendientes</h2>
				<?php

					foreach($data["dates"] as $cita){
						switch ($cita["fkModalidades"]) {
					  			case 1:
					  				$modalidad = 'Presencial';
					  				break;

					  			case 2:
					  				$modalidad = 'Virtual';
					  				break;

					  			default:
					  				// code...
					  				break;
					  		}
						echo"
						<form method='POST'><input type='text' name='id' hidden></form>
						<div class='card w-100 mb-2'>
						  <div class='card-body'>
						    <h5 class='card-title'>Fecha : ".$cita["fecha"]."</h5>
						    <h6 class='card-subtitle mb-2 text-body-secondary'>Hora : ".$cita["hora"]."</h6>
						    <p class='card-text'>Modalidad : ".$modalidad."</p>
						    <a href='index.php?c=consultant&a=acceptDate&id=".$cita["id"]."' class='btn btn-success'>Aceptar</a>
						    <a href='index.php?c=consultant&a=declinedDate&id=".$cita["id"]."' class='btn btn-danger'>Rechazar</a>
						  </div>
						</div>
						";
					}

				?>
			</div>
		</div>
	</main>

	<script>
		const btn = document.querySelector('#menu-btn');
		const menu = document.querySelector('#sidemenu');

		btn.addEventListener('click', e =>{
			menu.classList.toggle("menu-expanded");
			menu.classList.toggle("menu-collapsed");

			document.querySelector('body').classList.toggle('body-expanded');
		});
	</script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
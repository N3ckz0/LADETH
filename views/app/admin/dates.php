<?php
    $estado_session = session_status();

    if($estado_session == PHP_SESSION_NONE)
    {
        session_start();
    }
?>
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

	<?php require "views/app/admin/layout.php" ?>

	<main>
		<div class="container d-flex flex-column justify-content-center align-items-center">
			<!--Consultores-->
			<div class="col-12" style="margin-top: 100px; ">
				<h2 class="display-4 p-3">Citas</h2>
				<table class="table table-success">
				  	<thead>
				    	<tr>
				      		<th scope="col">#</th>
				      		<th scope="col">Fecha</th>
				      		<th scope="col">Hora</th>
				      		<th scope="col">Modalidad</th>
				      		<th scope="col">Estado</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<?php

				  		foreach($data["dates"] as $date){
					  		switch ($date["fkModalidades"]) {
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

					  		switch($date["fkEstados"])
					  		{
					  			case 2:
					  				$estado = 'Aceptada';
					  				break;

					  			case 1:
					  				$estado = 'Pendiente';
					  				break;

					  			case 3:
					  				$estado = 'Rechazada';
					  				break;

					  			case 4:
					  				$estado = 'Agendada';
					  				break;

					  			default:
					  				// code...
					  				break;
					  		}

				  			echo "
				    	<tr>
				      		<th scope='row'>".$date["id"]."</th>
				      		<td>".$date["fecha"]."</td>
				      		<td>".$date["hora"]."</td>
				      		<td>".$modalidad."</td>
				      		<td>".$estado."</td>
				    	</tr>";
				  		}
				    	?>
				  	</tbody>
				</table>
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
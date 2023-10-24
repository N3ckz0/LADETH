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

	<?php
		require "views/app/student/layout.php";
	?>

		<main>
		<div class="container d-flex flex-column justify-content-center align-items-center">
			<!--Consultores-->
			<div class="col-12" style="margin-top: 100px; ">
				<div class="d-flex align-items-center justify-content-between">
					<h2 class="display-4 p-3">Citas Pendientes</h2>
					<a href="index.php?c=app&a=newDate" class="btn btn-success h-50">Nueva Cita</a>
				</div>
				<?php

					if($data["message"] == "" || $data["message"] == null){
						echo "
						<table class='table table-success'>
						  	<thead>
						    	<tr>
						      		<th scope='col'>#</th>
						      		<th scope='col'>Fecha</th>
						      		<th scope='col'>Hora</th>
						      		<th scope='col'>Comentario</th>
						      		<th scope='col'>Encuesta</th>
						      		<th scope='col'>Especificaciones</th>
						      		<th scope='col'>Modalidad</th>
						      		<th scope='col'>Estado</th>
						    	</tr>
						  	</thead>
						<tbody>";
						foreach ($data["dates"] as $val) {
							switch ($val["fkModalidades"]) {
					  			case 1:
					  				$modalidad = 'Presencial';
					  				break;
					  			case 2:
					  				$modalidad = 'Virtual';
					  				break;
					  		}
					  		switch ($val["fkEstados"]) {
					  			case 1:
					  				$estado = 'Pendiente';
					  				break;
					  		}
				  			echo "
				    		<tr>
				      		<th scope='row'>".$val["id"]."</th>
				      		<td>".$val["fecha"]."</td>
				      		<td>".$val["hora"]."</td>
				      		<td>".$val["comentario"]."</td>
				      		<td>".$val["encuesta"]."</td>
				      		<td>".$val["fkEspecificaciones"]."</td>
				      		<td>".$modalidad."</td>
				      		<td>".$estado."</td>
				    	</tr>
				    	";
				  		}
				  		echo "
				  		</tbody>
						</table>";
					}else{
						echo $data["message"];
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
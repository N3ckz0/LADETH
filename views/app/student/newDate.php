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

	<?php
		require "views/app/student/layout.php";
	?>

	<main>
		<div class="container d-flex flex-column justify-content-center align-items-center">
			<form action="index.php?c=students&a=saveDate" method="POST" class="row w-100 p-3 g-3" style="margin-top: 100px;">
				<div class="col-md-12 title">
					<h2>Nueva Cita</h2>
				</div>
				<div class="col-md-12 col-sm-12 mt-4">
					<select class="form-select" aria-label="Default select example" id="servicios" onchange="showOptionsFromSelect()">
					  	<option selected>Elige el servicio</option>
					  	<option value="1">Desarrollo profesional</option>
					  	<option value="2">Cultura corporativa</option>
					  	<option value="3">Diseño organizacional</option>
					  	<option value="4">Reclutamiento y selección de personal</option>
					  	<option value="5">Evaluación del desempeño</option>
					  	<option value="6">Desarrollo y crecimiento del personal</option>
					  	<option value="7">Capacitación de personal</option>
					  	<option value="8">Legislación laboral</option>
					  	<option value="9">Sueldos y salarios</option>
					  	<option value="10">Higiene y seguridad laboral</option>
					</select>
				</div>
				<div class="col-md-12 col-sm-12 mt-4">
					<select class="form-select" aria-label="Default select example" id="opciones" onchange="selectedOption()">
						<option selected>Elige una opcion</option>
					</select>
					<input type="text" id="opcion" name="opcion" hidden>
				</div>
				<div class="col-md-12 col-sm-12 mt-4">
					<select class="form-select" aria-label="Default select example" id="modalidad" onchange="getModalidad()">
						<option selected>Elige la modalidad</option>
						<option value="1">Presencial</option>
						<option value="2">Virtual</option>
						<input type="text" name="modalidad" id="modal" hidden>
					</select>
				</div>
				<div class="col-md-6 col-sm-12 mt-4">
					<input type="date" class="form-control" id="date" name="date" onchange="selectDate()">
					<input type="text" id="fecha" name="fecha" hidden>
				</div>
				<div class="col-md-6 col-sm-12 mt-4">
					<select class="form-select" aria-label="Default select example" id="horarios" onchange="getFecha()">
						<option selected>Selecciona la Hora</option>
						<option value="1">10:00-11:00</option>
						<option value="2">11:00-12:00</option>
						<option value="3">12:00-13:00</option>
						<option value="4">13:00-14:00</option>
						<option value="5">14:00-15:00</option>
						<option value="6">15:00-16:00</option>
					</select>
					<input type="text" name="hora" id="hora" hidden>
				</div>
				<div class="col-md-12 col-sm-12 mt-4">
					<input type="textarea" name="comentario" class="w-100 form-control" placeholder="Describe brevemente la problemática en la que deseas que te apoyemos a través del servicio que has elegido.">
				</div>
				<div class="col-md-12 col-sm-12 mt-4">
					<input type="text" name="id" value="<?php echo $_SESSION["student"]["id"]; ?>" hidden>
				</div>
				<div class="col-md-12 col-sm-12 mt-4 d-flex justify-content-center">
					<button class="btn btn-success w-50">Agendar Cita</button>
				</div>
			</form>
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
	<script src="assets/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<?php require "views/app/admin/layout.php" ?>

	<main>
		<div class="container d-flex flex-column justify-content-center align-items-center">
			<form action="index.php?c=admin&a=saveConsultant" method="POST" class="row p-3 g-3 " style="margin-top: 100px;">
				<div class="col-md-12 title">
					<h2>Nuevo Consultor</h2>
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="text" name="name" class="form-control" placeholder="Nombre">
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="text" name="lastName" class="form-control" placeholder="Apellido Paterno">
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="text" name="maternalSurname" class="form-control" placeholder="Apellido Materno">
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="text" name="user" class="form-control" placeholder="Usuario">
				</div>
				<div class="col-md-12 col-sm-12">
					<input type="" name="telefono" class="form-control" placeholder="Telefono">
				</div>
				<div class="col-md-12 mb-4 d-flex align-items-center justify-content-center">
					<button class="btn btn-success w-50">Guardar</button>
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
</body>
</html>

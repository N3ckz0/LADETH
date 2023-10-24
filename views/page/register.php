<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/form.css">
</head>
<body class="container d-flex justify-content-center align-items-center">

	<form action="index.php?c=students&a=register" method="POST" class="row p-3 g-3">
		<div class="col-md-12 title">
			<h2>Laboratorio de Desarrollo de Talento Humano</h2>
			<h5>Registro</h5>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="text" name="name" class="form-control" placeholder="Nombre/s" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="text" name="lastName" class="form-control" placeholder="Apellido Paterno" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="text" name="maternalSurname" class="form-control" placeholder="Apellido Materno" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="text" name="user" class="form-control" placeholder="Matrícula" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<select class="form-select" aria-label="Default select example" onchange="getDivision()" id="miSelect">
			  	<option selected>División</option>
			  	<option value="1">Sistemas Automotrices</option>
			  	<option value="2">Tecnologías de la Información</option>
			  	<option value="3">Energías Alternas y Medio Ambiente</option>
			  	<option value="4">Gastronomía</option>
			  	<option value="5">Procesos Industriales</option>
			  	<option value="6">Mantenimiento Industrial</option>
			  	<option value="7">Mecatrónica</option>
			  	<option value="8">Negocios</option>
			</select>
			<input type="text" name="division" hidden id="division" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="" name="telefono" class="form-control" placeholder="Telefono" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="number" name="grado" class="form-control" placeholder="Grado" min="1" max="9" maxlength="2" required>
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="text" name="grupo" class="form-control" placeholder="Grupo" oninput="convertirAMayusculas()" maxlength="1" required id="grupo">
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="password" name="psswd" class="form-control" placeholder="Contraseña" id="psswd">
		</div>
		<div class="col-md-6 col-sm-12">
			<input type="password" name="vrfPsswd" class="form-control" placeholder="Verifica la Contraseña" id="psswd2" onchange="verify()">
		</div>
		<hr>
		<div class="col-md-12 mb-4">
			<button class="btn btn-success" id="btn" disabled>Registrarse</button>
		</div>
	</form>

	<!--Bootstrap Js-->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>
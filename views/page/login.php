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

<body class="d-flex justify-content-center align-items-center">

	<form action="index.php?c=login&a=verifyLogin" method="POST" class="p-4">
		<div class="title">
			<h2>Laboratorio de Desarrollo <br>de Talento Humano</h2>
			<h5>Inicio de Sesión</h5>
		</div>
		<div class="mt-4">
			<input type="text" name="user" class="form-control" placeholder="Matrícula">
		</div>
		<div class="mt-4">
			<select class="form-select" aria-label="Default select example" id="correo" onchange="getMail()">
			  	<option selected>Correo</option>
			  	<option value="@utpuebla.edu.mx">@utpuebla.edu.mx</option>
			  	<option value="@alumno.utpuebla.edu.mx">@alumno.utpuebla.edu.mx</option>
			</select>
			<input type="text" name="mail" class="form-control" placeholder="Correo" id="mail" hidden>
		</div>
		<div class="mt-4">
			<input type="password" name="psswd" class="form-control" placeholder="Contraseña">
		</div>
		<div class="mt-4">
			<button class="btn btn-success">Iniciar Sesión</button>
		</div>
		<hr>
		<div>
			<a href="index.php?c=webpage&a=register" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrarse</a>
		</div>
	</form>

	<!--Bootstrap Js-->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>
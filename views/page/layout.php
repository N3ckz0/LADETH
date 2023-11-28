<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorio de Consultoría</title>
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

	<!--MENU-->
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: #000;">
			  	<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</label>
		<a class="enlace">
			<button class="btn" onclick="loadDoc('index',funcion1)">
				<img src="assets/img/LADETH.png" alt="Logo LADETH" class="logo">
			</button>
		</a>
		<ul>
			<li><button class="btn" onclick="loadDoc('index')">Inicio</button></li>
			<li><button class="btn" onclick="loadDoc('about')">Acerca de Nosotros</button></li>
			<li><button class="btn" onclick="loadDoc('services')">Servicios</button></li>
			<li><button class="btn" onclick="loadDoc('contact')">Contacto</button></li>
			<li><a class="btn btn-success btnSesion" href="index.php?c=webpage&a=login">Iniciar Sesion</a></li>
		</ul>
	</nav>

	<div class="fluid-container" id="container"></div>

	<!--Bootstrap Js-->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--Carga los archivos en un container-->
	<script src="assets/js/scriptFiles.js"></script>
	<!--Funcionalidad de la pagina y aplicacion-->
	<script src="assets/js/app.js"></script>
</body>
</html>
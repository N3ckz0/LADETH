<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Perfil</title>
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<style>
		#msg{
			display: none;
		}
	</style>
</head>
<body>

	<?php require "views/app/student/layout.php" ?>

	<main>
		<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
			<div class="row">
				<div class="col-md-6"><img src="assets/img/app/user.webp" alt="" class="photo-profile"></div>
				<div class="col-md-6">
					<form action="index.php?c=students&a=updatePassword" method="POST" class="row p-3 g-3 " style="margin-top: 100px;">
						<div class="col-md-12 title">
							<h2 class="text-center">Cambiar Contraseña</h2>
							<input type="text" name="id" class="form-control" value="<?php echo $_SESSION["student"]["id"]; ?>" hidden>
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="text" name="psswd" id="psswd" class="form-control" value="<?php echo $_SESSION["student"]["contrasena"]; ?>" hidden>
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="password" name="vrfPsswd" id="vrfPsswd" class="form-control" placeholder="Escribe la Contraseña" onchange="VerificaContra()">
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="password" name="newPsswd" id="newPsswd" class="form-control" placeholder="Escribe la nueva Contraseña" disabled>
						</div>
						<div class="col-md-12 mb-4 d-flex align-items-center justify-content-center">
							<button class="btn btn-success w-50">Guardar Cambios</button>
						</div>
						<div class="col-md-12" id="msg">
							<div class="alert alert-danger text-center" role="alert">
								La Contraseña que ingresaste es Incorrecta
							</div>
						</div>
					</form>
				</div>
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
	<script src="assets/js/password.js?v2"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
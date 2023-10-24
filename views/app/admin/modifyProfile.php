<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Perfil</title>
	<link rel="stylesheet" href="assets/css/app.css?v3">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<?php require "views/app/admin/layout.php" ?>

	<main>
		<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
			<div class="row">
				<div class="col-md-6"><img src="assets/img/app/user.webp" alt="" class="photo-profile"></div>
				<div class="col-md-6">
					<form action="index.php?c=admin&a=updateProfile" method="POST" class="row p-3 g-3 " style="margin-top: 100px;">
						<div class="col-md-12 title">
							<h2 class="text-center">Modificar Perfil</h2>
							<input type="text" name="id" class="form-control" value="<?php echo $_SESSION["admin"]["id"]; ?>" hidden>
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="text" name="name" class="form-control" value="<?php echo $_SESSION["admin"]["nombre"]; ?>">
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="text" name="lastName" class="form-control" value="<?php echo $_SESSION["admin"]["apellidoPaterno"]; ?>">
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="text" name="maternalSurname" class="form-control" value="<?php echo $_SESSION["admin"]["apellidoMaterno"]; ?>">
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="text" name="user" class="form-control" value="<?php echo $_SESSION["admin"]["usuario"]; ?>">
						</div>
						<div class="col-md-12 col-sm-12">
							<input type="" name="telefono" class="form-control" value="<?php echo $_SESSION["admin"]["telefono"]; ?>">
						</div>
						<div class="col-md-12 mb-4 d-flex align-items-center justify-content-center">
							<button class="btn btn-success w-50">Guardar Cambios</button>
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
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
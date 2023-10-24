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
	<title>Inicio</title>
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php require "views/app/student/layout.php" ?>
	<main class="container d-flex flex-column justify-content-center align-items-center">
		<h2 class="display-4 p-3">Bienvenido <?php echo $_SESSION["student"]["nombre"]; ?></h2>
		<img class="w-100 mt-5" src="assets/img/LADETH.png" alt="">
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

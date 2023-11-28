<?php
    $estado_session = session_status();

    if($estado_session == PHP_SESSION_NONE)
    {
        session_start();
    }


?>

<h2 class="display-4 p-3 text-center">Usuarios</h2>
		<div class="grid">
			<div class="grid-item">
				<div class="text">
					<p>Total</p>
					<p><?php echo $_SESSION["AllUsers"]["count(*)"]; ?></p>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Administradores</p>
					<P><?php echo $_SESSION["Admins"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Consultores</p>
					<P><?php echo $_SESSION["Consultants"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Estudiantes</p>
					<P><?php echo $_SESSION["Students"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
		</div>
		<h2 class="display-4 p-3 text-center">Citas</h2>
		<div class="grid">
			<div class="grid-item">
				<div class="text">
					<p>Total</p>
					<P><?php echo $_SESSION["AllDates"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Aceptadas</p>
					<P><?php echo $_SESSION["Acepted"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Rechazadas</p>
					<P><?php echo $_SESSION["Declined"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
			<div class="grid-item">
				<div class="text">
					<p>Pendientes</p>
					<P><?php echo $_SESSION["Pending"]["count(*)"];?></P>
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person ms-auto" viewBox="0 0 16 16">
	  				<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
					</svg>
				</div>
			</div>
		</div>
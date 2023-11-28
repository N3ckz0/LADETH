<div id="sidemenu" class="menu-collapsed">
	<!--HEADER-->
	<div id="header">
		<div id="title"><span>LADETH</span></div>
		<div id="menu-btn">
			<div class="btn-hamburger"></div>
			<div class="btn-hamburger"></div>
			<div class="btn-hamburger"></div>
		</div>
	</div>
	<!--PROFILE-->
	<div id="profile">
		<div id="photo"><img src="assets/img/app/user.webp" alt=""></div>
		<div id="name"><span><?php echo $_SESSION["admin"]["nombre"]; ?></span></div>
	</div>
	<!--ITEMS-->
	<div id="menu-items">
		<div class="item">
			<a href="index.php?c=admin&a=index">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
					<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
					</svg>
				</div>
				<div class="title"><span>Inicio</span></div>
			</a>
		</div>
		<div class="item">
			<a href="index.php?c=admin&a=consultants">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
					<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
					</svg>
				</div>
				<div class="title"><span>Consultores</span></div>
			</a>
		</div>
		<div class="item">
			<a href="index.php?c=admin&a=dates">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
					<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
					<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
					</svg>
				</div>
				<div class="title"><span>Citas</span></div>
			</a>
		</div>
		<div class="item separator"></div>
		<div class="item">
			<a href="index.php?c=admin&a=profile">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
					</svg>
				</div>
				<div class="title"><span>Perfil</span></div>
			</a>
		</div>
		<div class="item">
			<a href="/">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
					<path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
					<path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z"/>
					</svg>
				</div>
				<div class="title"><span>Cerrar Sesion</span></div>
			</a>
		</div>
	</div>
</div>
<!DOCTYPE html>
<html lang="es-419">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>LOS2ME - Inicio</title>		
		<link rel="stylesheet" href="StyleObjetos.css">
		<link rel="shortcut icon" href="img/icon.png">
	</head>	
	<body>	
		
	<header>
		<a class="logo">
			<img src="img/icon.png" alt="Logo ColFantasy">
			<h1 class="Nombre LOS2ME">LOS2ME</h1>
		</a>
		<nav>
			<a href="Main.php" class="nav-link">Inicio</a>
			<a href="Objetos.php" class="nav-link">Tus Objetos</a>
			<a href="Perfil.php" class="nav-link">Perfil</a>
		</nav>
	</header>
		
		<div id="general">
				<div id="objetos">
					<h1 style="text-align: center">ÚLTIMOS OBJETOS PERDIDOS</h1><br>

					<a title="Reportar Objeto" href="Reportar.php" style="display: grid; place-items:center;font-weight: bold; color: #17A465"><img src="img/reportar.png" alt="Reportar" style="width: 60px; height: 60px"/>REPORTAR OBJETO</a><br>

					<div class="grid-container">
							<?php
							include('MostrarObjetos.php');
							?>
						</div>
				</div>	
			
		</div>
		
	</body>
</html>
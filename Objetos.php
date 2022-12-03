<!DOCTYPE html>
<html lang="es-419">
	
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOS2ME - Objetos</title>		
	<link rel="stylesheet" href="StyleObjetos.css">
	<link rel="shortcut icon" href="img/icon.png">
	
</head>	

<body>	
	<header>
		<a class="logo">
			<img src="img/icon.png" alt="Logo LOS2ME">
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
			<h1 style="text-align: center">TUS OBJETOS SUBIDOS</h1>
			<a title="Agregar Objeto" href="ObjetoNuevo.php" style="font-weight: bold; color: #17A465"><img src="img/agregar.png" alt="Agregar" style="width: 60px; height: 60px;  vertical-align: middle"/>AGREGAR OBJETO</a><br><br>         
			<a title="Modificar Estado" href="CambioEstado.php" style="font-weight: bold; color: #17A465"><img src="img/modificar.png" alt="Modificar" style="width: 60px; height: 60px; vertical-align: middle"/>MODIFICAR ESTADO</a>
					

			<div class="grid-container">

			<?php
				include('MostrarObjetos_User.php');
				?>
			</div>
		</div>	
	</div>
	
</body>
</html>
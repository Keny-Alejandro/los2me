<!DOCTYPE html>
<html lang="es-419">
	
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOS2ME - Cambiar Estado</title>		
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
			<h1 style="text-align: center">DIGITA EL CÓDIGO DEL OBJETO A MODIFICAR</h1>
			<br>

			<form action="CambiarEstado.php" class="formulario" method="post" style="text-align: center">

			<input style="text-align: center" type="text" id="code" name="code" placeholder="Código del Objeto" required>
			<input type="submit" value="CONTINUAR" class="button">
			
			</form>	
			<br>
			<div class="grid-container">
			<?php
			
				include('ModificarEstado.php');
				?>
			</div>
		</div>	
	</div>
	
</body>
</html>
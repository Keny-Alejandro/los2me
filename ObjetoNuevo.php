<!DOCTYPE html>
<html lang="es-419">
	
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOS2ME - Subir Objeto</title>		
	<link rel="stylesheet" href="StyleObjetoNuevo.css">
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
    
	<form action="RegistroNuevoObjeto.php" class="formulario" method="post" enctype="multipart/form-data">
		
    <h1 style="text-align: center">AGREGAR OBJETO NUEVO</h1>
		<br><br>
		<div class="contenedor">
		
			<div class="input-contenedor">
                <p>Nombre del objeto perdido</p>
				<input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
			</div>

			<div class="input-contenedor">
                <p>Foto del objeto perdido</p>
				<input type="file" id="foto" name="foto" placeholder="Foto" required>
			</div>

			<div class="input-contenedor">
                <p>Fecha en la que perdiste el objeto</p>
				<input type="date" name="fecha" id="fecha" placeholder="Fecha" required max=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
			</div>
			
			<br><br><br>
			
			<input type="submit" id="register" name="register" value="SUBIR OBJETO" class="button">
			<br><br>
		</div>
	</form>	
	
</body>
</html>
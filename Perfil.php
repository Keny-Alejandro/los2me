<?php
session_start();
if(($_SESSION["civica"])!=''){
?>

<!DOCTYPE html>
<html lang="es-419">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>LOS2ME - Perfil</title>		
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
				<h1 style="text-align: center">PERFIL DE USUARIO</h1>
				<?php
				include('MostrarPerfil.php');
				?>
				<a class="link" href="Cerrar_Sesion.php"><h2 style="text-align: center; color: red">CERRAR SESIÓN</h2></a>
				</div>	
		</div>
		
	</body>
</html>
<?php
}else{
	header("Location: Login.php");
}
?>
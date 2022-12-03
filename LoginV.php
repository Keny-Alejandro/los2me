<?php

	session_start();
	require_once('Conexion.php');

	$civica = $_POST['civica'];
	$clave = $_POST['clave'];
	$_SESSION['civica']=$civica;

	$civica = mysqli_real_escape_string($Conexion, $civica);
	$clave = mysqli_real_escape_string($Conexion, $clave);
	
	$consulta = ("SELECT * FROM usuario WHERE civica='$civica' AND clave='$clave'");
	$resultado = mysqli_query($Conexion,$consulta);
	$filas = mysqli_num_rows($resultado);

	if($filas!=0){
		header("Location: Main.php");
		}
		else
		{
			?>
			<h1>Tarjeta cívica y/o contraseña incorrectos.</h1>
			<?php
			?>
			<?php
			include("Login.php");
		}

?>
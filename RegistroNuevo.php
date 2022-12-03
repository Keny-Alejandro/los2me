<?php
	
	require_once('Conexion.php');
	
	$correo = $_POST['correo'];
	$clave = $_POST['clave'];
	$civica = $_POST['civica'];
	$nick = $_POST['nick'];
	$cedula = $_POST['cedula'];
	
	$sqli = "SELECT civica FROM usuario WHERE civica = '".$civica."'";
	$resultado = $Conexion->query($sqli);
	$fila = mysqli_num_rows($resultado);
	
	if($fila==0){
	$sql = "INSERT INTO usuario (cedula, correo, nick, civica, clave) VALUES ('".$cedula."','".$correo."','".$nick."','".$civica."','".$clave."')";
	$insert = $Conexion->query($sql) or die (mysqli_errno());
		header("Location: Main.php");

	}
	else{
		?>
		<h1>Ya existe una cuenta asociada a este número de tarjeta cívica.</h1>
		<?php
		?>
		<?php
		include("Register.php");

	}

?>
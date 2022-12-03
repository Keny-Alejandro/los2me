<?php

	session_start();
	require_once('Conexion.php');
	
	$nombre = $_POST['nombre'];
	$foto = $_POST['foto'];
	$fecha = $_POST['fecha'];
    
    mkdir('img/Objetos/'.$_SESSION['civica']);
	$ruta = 'img/Objetos/'.$_SESSION['civica'].'/';
    $fichero = $ruta.basename($_FILES['foto']['nombre']);
    $rut = $ruta.$nombre.".png";
    
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$ruta.$nombre.".png")){
	$sql = "INSERT INTO objeto (foto, nombre, fecha, estado, civica) VALUES ('".$rut."','".$nombre."','".$fecha."',1,'".$_SESSION['civica']."')";
	$insert = $Conexion->query($sql) or die (mysqli_errno());
	header("Location: Objetos.php");
    }
?>
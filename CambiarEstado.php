<?php
    
    session_start();    
    $inc=include("Conexion.php");
    $_SESSION['code'] = $_POST['code'];
    $code = $_SESSION['code'];
?>

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
        

    <?php
    

if($inc){

$Consulta = "SELECT objeto.foto, objeto.nombre, objeto.id_objeto, objeto.fecha, usuario.nick, usuario.civica, estado.descripcion FROM objeto INNER JOIN usuario ON objeto.civica=usuario.civica INNER JOIN estado ON objeto.estado=estado.id_estado WHERE objeto.id_objeto='".$code."' AND usuario.civica='".$_SESSION['civica']."'";
$Resultado = mysqli_query($Conexion,$Consulta);
$Filas = mysqli_num_rows($Resultado);

    if($Filas!=0){

     if($Resultado){
            
        while($row = $Resultado->fetch_array()){
            $foto = $row['foto'];
            $nombre = $row['nombre'];
            $estado = $row['descripcion'];
            $fecha = $row['fecha'];
            ?>

            <h1 style="text-align: center">OBJETO SELECCIONADO</h1><br>
            NOMBRE: <?php echo $nombre ?> ||
            ESTADO ACTUAL: <?php echo $estado ?> <br><br>
            <img style="height: 200px; width: 200px; align-items: right" src="<?php echo $foto ?>">
            <h1 style="text-align: center">NUEVO ESTADO:</h1>

            <?php
        }

        ?>
        <form action="Actualizar.php" class="formulario2" method="post" style="text-align: center">
        <select name="estado" id="estado">
            <option value="1">Perdido</option>
            <option value="2">Encontrado</option>
            <option value="3">Devuelto</option>
        </select><br>
        <br><input type="submit" value="GUARDAR" class="button">
        </form>
        <?php
     }
    }	else {
        ?>
        <?php
        include("ErrorObjeto.php");
    }
}
?>

    <h2 style="text-align: center">PERDIDO: El objeto se encuentra extraviado en el Sistema Metro.</h2>
    <h2 style="text-align: center">ENCONTRADO: El objeto se encuentra en uno de los PAC del Sistema Metro.</h2>
    <h2 style="text-align: center">DEVUELTO: El objeto ha sido entregado a su dueño.</h2>
	</div>
</body>
</html>
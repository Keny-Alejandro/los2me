<?php	

    session_start();
	$inc=include("Conexion.php");

	if($inc){
	$Consulta = 'SELECT objeto.foto, objeto.nombre, objeto.id_objeto, usuario.nick, estado.descripcion FROM objeto INNER JOIN usuario ON objeto.civica=usuario.civica INNER JOIN estado ON objeto.estado=estado.id_estado WHERE objeto.civica="'.$_SESSION['civica'].'"';
	$Resultado = mysqli_query($Conexion,$Consulta);
    
		if($Resultado){
				
			while($row = $Resultado->fetch_array()){   
                $id_objeto = $row['id_objeto'];
				$foto = $row['foto'];
				$nombre = $row['nombre'];
                $estado = $row['descripcion'];
				?>
				<br>
				NOMBRE: <?php echo $nombre ?><br><br>
                ESTADO: <?php echo $estado ?><br><br>
                CÓDIGO: <?php echo $id_objeto ?><br><br>
                <img style="height: 256px; width: 256px" src="<?php echo $foto ?>">
                <?php                
			}

		}
	}

?>
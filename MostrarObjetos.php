<?php
	
	$inc=include("Conexion.php");

	if($inc){
	$Consulta = "SELECT objeto.foto, objeto.nombre, objeto.fecha, objeto.estado, estado.descripcion, usuario.nick FROM objeto INNER JOIN estado ON objeto.estado=estado.id_estado INNER JOIN usuario ON objeto.civica=usuario.civica ORDER BY objeto.fecha DESC";
	$Resultado = mysqli_query($Conexion,$Consulta);
	
		if($Resultado){
				
			while($row = $Resultado->fetch_array()){
				$foto = $row['foto'];
				$nombre = $row['nombre'];
				$fecha = $row['fecha'];
                $descripcion = $row['descripcion'];
                $nick = $row['nick'];
				?>
				<br>
				NOMBRE: <?php echo $nombre ?><br><br>
				SUBIDO EL: <?php echo $fecha ?><br><br>
				SUBIDO POR: <?php echo $nick ?><br><br>
                ESTADO: <?php echo $descripcion ?><br><br><br>
                <img style="height: 256px; width: 256px" src="<?php echo $foto ?>">
				<?php
			}
			
		}
	}
?>
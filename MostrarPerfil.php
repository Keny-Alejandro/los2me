<?php
	
	$inc=include("Conexion.php");

	if($inc){
	$Consulta = 'SELECT correo, nick, civica FROM usuario WHERE civica="'.$_SESSION['civica'].'"';
	$Resultado = mysqli_query($Conexion,$Consulta);
	
		if($Resultado){
				
			while($row = $Resultado->fetch_array()){
				$correo = $row['correo'];
				$nick = $row['nick'];
				$civica = $row['civica'];
				?>
				<br>
				CORREO: <?php echo $correo ?><br><br>
				NOMBRE DE USUARIO: <?php echo $nick ?><br><br>
				N° CÍVICA: <?php echo $civica ?><br><br>
				<?php
			}
			
		}
	}
?>
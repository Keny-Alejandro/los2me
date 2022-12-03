<!DOCTYPE html>
<html lang="es-419">
	
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOS2ME - Inicio de Sesión</title>		
	<link rel="stylesheet" href="StyleRegister.css">
	<link rel="shortcut icon" href="img/icon.png">
	
</head>	
<body>	
	
		<form action="LoginV.php" class="formulario" method="post">

		<h1>INICIAR SESIÓN</h1>
		<br><br>
		<div class="contenedor">
		
			<div class="input-contenedor">
				<input type="text" id="civica" name="civica" placeholder="Número de Cívica" required>
			
			</div>
			
			<div class="input-contenedor">
				<input type="password" id="clave" name="clave" placeholder="Contraseña" required>
				<img src="img/show.png" onclick="myFunction()">
				
			</div>
			
			<br><br><br><br><br>
			<input type="submit" value="INICIAR SESIÓN" class="button">
			<br><br>
			<p style="color:#17A465">¿No tienes una cuenta? <a class="link" href="Register.php">Regístrate.</a></p>
		</div>
	</form>	
	
<script type="text/javascript">
function myFunction(){
	var x  = document.getElementById("clave");
	if(x.type==="password"){
	x.type="text";
	}else{
	x.type="password";
	}
}
</script>		
	
</body>
</html>
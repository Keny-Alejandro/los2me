<!DOCTYPE html>
<html lang="es-419">
	
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>LOS2ME - Registro</title>		
	<link rel="stylesheet" href="StyleRegister.css">
	<link rel="shortcut icon" href="img/icon.png">
	
</head>	

<body>	

	<form action="RegistroNuevo.php" class="formulario" method="post">
		
		<h1>CREAR CUENTA</h1>
		<br><br>
		<div class="contenedor">
		
			<div class="input-contenedor">
				<input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
			</div>

			<div class="input-contenedor">
				<input type="text" id="nick" name="nick" placeholder="Nombre de Usuario" required>
			</div>

			<div class="input-contenedor">
				<input type="text" id="cedula" name="cedula" placeholder="Documento de Identidad" required>
			</div>

			<div class="input-contenedor">
				<input type="text" id="civica" name="civica" placeholder="Número de Cívica" required>
			</div>
			
			<div class="input-contenedor">

				<input type="password" id="clave" name="clave" placeholder="Contraseña" required>
				<img src="img/show.png" onclick="myFunction()">
				
			</div>
			
			<br><br><br><br><br>
			
			<input type="submit" id="register" name="register" value="REGÍSTRATE" class="button">
			<br><br>
			<h6 style="color:#17A465">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</h6>
			<p style="color:#17A465">¿Ya tienes una cuenta? <a class="link" href="Login.php">Inicia Sesión.</a></p>
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
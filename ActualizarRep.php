<?php

	session_start();
    $inc=include("Conexion.php");
    $code = $_SESSION['code'];
    $_SESSION['estado'] = $_POST['estado'];
    $estado = $_SESSION['estado'];
	
    if($inc){

        $Consulta = "SELECT objeto.id_objeto, estado.id_estado FROM objeto INNER JOIN estado ON objeto.estado=estado.id_estado WHERE objeto.id_objeto='".$code."'";
        $Resultado = $Conexion->query($Consulta);
        $Filas = mysqli_num_rows($Resultado);
        
        if($Filas!=0){

        if($estado=='1'){
            $Consulta1 = "INSERT INTO reporte (id_objeto, estado_nuevo) VALUES ('$code','1')";
            $Resultado1 = $Conexion->query($Consulta1) or die (mysqli_errno());
        }else if($estado=='2'){
            $Consulta2 = "INSERT INTO reporte (id_objeto, estado_nuevo) VALUES ('$code','2')";
            $Resultado2 = $Conexion->query($Consulta2) or die (mysqli_errno());
        }else if($estado=='3'){
            $Consulta3 = "INSERT INTO reporte (id_objeto, estado_nuevo) VALUES ('$code','3')";
            $Resultado3 = $Conexion->query($Consulta3) or die (mysqli_errno());
        }
    
}else{
    header("Location: Main.php");
}
    }
    header("Location: FinObjeto.php");
?>
<?php

	session_start();
    $inc=include("Conexion.php");
    $code = $_SESSION['code'];
    $_SESSION['estado'] = $_POST['estado'];
    $estado = $_SESSION['estado'];
	
    if($inc){

        $Consulta = "SELECT objeto.id_objeto, usuario.nick, estado.id_estado FROM objeto INNER JOIN usuario ON objeto.civica=usuario.civica INNER JOIN estado ON objeto.estado=estado.id_estado WHERE objeto.id_objeto='".$code."' AND usuario.civica='".$_SESSION['civica']."'";
        $Resultado = mysqli_query($Conexion,$Consulta);
        $Filas = mysqli_num_rows($Resultado);
        
        if($Filas!=0){

            if($Resultado){
                 
        if($estado=='1'){
            $Consulta1 = "UPDATE objeto SET estado = '1' WHERE id_objeto='".$code."'";
            $Resultado1 = mysqli_query($Conexion,$Consulta1);
        }else if($estado=='2'){
            $Consulta2 = "UPDATE objeto SET estado = '2' WHERE id_objeto='".$code."'";
            $Resultado2 = mysqli_query($Conexion,$Consulta2);
        }else if($estado=='3'){
            $Consulta3 = "UPDATE objeto SET estado = '3' WHERE id_objeto='".$code."'";
            $Resultado3 = mysqli_query($Conexion,$Consulta3);
        }
    }
}
    }
    header("Location: Objetos.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

	$vlr    = $_REQUEST['vlr'];
	$iva	=($vlr*19)/100;
	$total	=$iva + $vlr;
		
echo 'Valor del IVA '.$iva.'.<br><br>Valor total '.$total.'.';
?>
<?php 
    //-- variables para conectarse a la base de datos
    $servidor	    = 'localhost';
    $base_datos	    = 'ejercicios';
    $tabla	        = 'diez';
    $usr_sistema    = 'root';
    $pass_sistema	= ''; 
    $conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
    if (!$conexion){
        header ("Location: index.php?mensaje=error de conexion.");
        exit(); 
    }
    else{
        //-- Consulta Sql para guardar el registro o datos digitados.
        $sql = "INSERT INTO ".$base_datos.".".$tabla." (vlr, iva, total) "
        ."VALUES('$vlr', '$iva', '$total')"; 
        $sql = mysqli_query($conexion, $sql); 
    }    
?>


</body>
</html>
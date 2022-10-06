<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

	$f     = $_REQUEST['f'];

	$c	= ( $f - 32 ) * ( 5 / 9 );			

	echo $f.' grados farenheit equivalen a '.$c.' grados celsius.';

?>
<?php 
    //-- variables para conectarse a la base de datos
    $servidor	    = 'localhost';
    $base_datos	    = 'ejercicios';
    $tabla	        = 'siete';
    $usr_sistema    = 'root';
    $pass_sistema	= ''; 
    $conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
    if (!$conexion){
        header ("Location: index.php?mensaje=error de conexion.");
        exit(); 
    }
    else{
        //-- Consulta Sql para guardar el registro o datos digitados.
        $sql = "INSERT INTO ".$base_datos.".".$tabla." (celsius) "
        ."VALUES('$c')"; 
        $sql = mysqli_query($conexion, $sql); 
    }    
?>


</body>
</html>
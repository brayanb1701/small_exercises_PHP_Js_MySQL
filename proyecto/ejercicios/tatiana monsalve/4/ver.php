<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

	$n1     = $_REQUEST['n1'];
	$n2     = $_REQUEST['n2'];
	$n3     = $_REQUEST['n3'];
	$s		= 0;
	$m		= 0;

if ($n1 > '0') {
	$m		= $n2 * $n3;
	echo 'Multiplicación = '.$m;
	} else {
	$s		= $n2 + $n3;
	echo 'Suma = '.$s;	}	

?>
<?php 
    //-- variables para conectarse a la base de datos
    $servidor	    = 'localhost';
    $base_datos	    = 'ejercicios';
    $tabla	        = 'cuatro';
    $usr_sistema    = 'root';
    $pass_sistema	= ''; 
    $conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
    if (!$conexion){
        header ("Location: index.php?mensaje=error de conexion.");
        exit(); 
    }
    else{
        //-- Consulta Sql para guardar el registro o datos digitados.
        $sql = "INSERT INTO ".$base_datos.".".$tabla." (suma, multiplicacion) "
        ."VALUES('$s', '$m')"; 
        $sql = mysqli_query($conexion, $sql); 
    }    
?>


</body>
</html>
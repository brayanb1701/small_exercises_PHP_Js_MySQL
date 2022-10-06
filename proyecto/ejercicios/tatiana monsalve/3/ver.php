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
	$s	= $n1 + $n2;		
	$r	= $n1 - $n2;
	$m	= $n1 * $n2;	
		
echo 'Suma = '.$s.'<br><br>';
echo 'Resta = '.$r.'<br><br>';
echo 'Multiplicación = '.$s.'<br><br>';
if ($n2 != '0') {
	$d = $n1/$n2;
	} else {
	$d = 'Error. Número 2 debe ser diferente a cero (0).';	}
echo 'División = '.$d;
?>
<?php 
    //-- variables para conectarse a la base de datos
    $servidor	    = 'localhost';
    $base_datos	    = 'ejercicios';
    $tabla	        = 'tres';
    $usr_sistema    = 'root';
    $pass_sistema	= ''; 
    $conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
    if (!$conexion){
        header ("Location: index.php?mensaje=error de conexion.");
        exit(); 
    }
    else{
        //-- Consulta Sql para guardar el registro o datos digitados.
        $sql = "INSERT INTO ".$base_datos.".".$tabla." (suma, resta, multiplicacion, division) "
        ."VALUES('$s', '$r', '$m', '$d')"; 
        $sql = mysqli_query($conexion, $sql); 
    }    
?>


</body>
</html>
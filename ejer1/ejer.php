<?php
//-- variables para conectarse a la base de datos
$servidor	= 'localhost';
$base_datos	= 'informatica';
$tabla	= 'notas';
$usr_sistema	= 'root';
$pass_sistema	= 'projects'; 
//-- Conexion a la Base de datos segun variables declaradas 
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
//-- Captura de las variables del formulario.
$nota1	= $_POST['nota1'];
$nota2	= $_POST['nota2'];
$nota3	= $_POST['nota3'];
$nota4	= $_POST['nota4'];
$promedio= ($nota1+$nota2+$nota3+$nota4)/4;

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "INSERT INTO ".$base_datos.".".$tabla." (id, nota1, nota2, nota3, nota4, promedio) "
."VALUES(NULL, '".$nota1."', '".$nota2."', '".$nota3."', '".$nota4."', '".$promedio."')"; 
//echo $sql;
$sql = mysqli_query($conexion,$sql); 


//-- Se devuelve a la pagina que inicial.
header ("Location: index.php?mensaje=Registro Incluido con Exito.&promedio=".$promedio);
exit(); 
}
?>
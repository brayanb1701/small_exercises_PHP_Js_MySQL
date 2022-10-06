<?php
//-- variables para conectarse a la base de datos
$servidor	= 'localhost';
$base_datos	= 'onceb_02';
$tabla	= 'numeros';
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
$numero	= $_POST['num']; 
echo $numero;



$sql = "INSERT INTO ".$base_datos.".".$tabla." (numero) " //Nombre de las columnas de la base de datos
."VALUES(".$numero.")"; //Variables del formulario especificadas anteriormente
echo $sql;
$sql = mysqli_query($conexion,$sql); 

//-- Se devuelve a la pagina que inicial.
header ("Location: index.php?mensaje=Registro Incluido con Exito.");
exit(); 

}

?>
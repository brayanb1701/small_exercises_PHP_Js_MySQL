<?php 
	$servidor		= 'localhost';
	$usr_sistema	= 'root';
	$pass_sistema	= 'projects';
	$base_datos		= 'tabla_1';
	$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
	if (!$conexion){
		header ("Location: index.php?mensaje=error de conexion.");
		exit();		   
	}
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT ancho, grosor_borde, num_filas " //Nombre de columnas digitados en la base de datos
			  ."FROM ".$base_datos.".datos_tabla  ";
			  
		$sql = mysqli_query($conexion,$sql);	 // No cambia
//-- ------------------------------------------------------------------------------------------------

while($rs = mysqli_fetch_array($sql)) { 
$ancho			= $rs[0];
$grosor_borde	= $rs[1];
$num_filas   	= $rs[2];
			
echo "
<table width='".$ancho."%' border='".$grosor_borde."'>";
for($i=1; $i<=$num_filas; $i++){
echo "<tr><td>".$i."</td></tr>";
}echo "</table><br>";

}	   
?>			  
  
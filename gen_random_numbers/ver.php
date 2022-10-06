<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Grupo 02</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div id="page">
		<div id="header">
			<div class="background">
				<h1 id="logo"> <a href="index.php"><center> REGISTRO NUMEROS ALEATORIOS </center></a> </h1>
				<div id="navigation">
					<ul>
						<li><a href="index.php"> Inicio </a></li>
						<li><a href="ver.php"> Ver</a></li>
						<li><a href="derechos.php">Derechos </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="">
				<div>
				<br>
				<center>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>
				    <?php 
	$servidor		= 'localhost';
	$usr_sistema	= 'root';
	$pass_sistema	= 'projects';
	$base_datos		= 'onceb_02';
	$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
	if (!$conexion){
		header ("Location: index.php?mensaje=error de conexion.");
		exit();		   
	}
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT id, numero " //Nombre de columnas digitados en la base de datos
			  ."FROM ".$base_datos.".numeros  ";
			  
		$sql = mysqli_query($conexion,$sql);	 // No cambia
//-- ------------------------------------------------------------------------------------------------
echo "
<table border='1'>";
while($rs = mysqli_fetch_array($sql)) { 
$id			= $rs[0];
$numero		= $rs[1];

			


echo "<tr><td>".$id."</td><td>".$numero."</td></tr>";

}	  
echo "</table><br>";

?>			 
                  </p>
				</center>
				 <form action="index.php">
				   <p align="center">
				     <input name="submit" type="submit" value="Volver">
		           </p>
			      </form>
			  </div>
			</div>
	  </div>
		<div id="footer">
			<div class="background">
				<div class="body">
				  <p id="footnote">
						© Copyright 2023. All rights reserved.
				  </p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
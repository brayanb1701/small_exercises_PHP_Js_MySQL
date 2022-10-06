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
		  	<form method="post" action="datos.php">
				       
<?php
 $numero=rand(1, 1000);
?>
         

                <input type="text" id="num" name="num" value="<?php echo $numero; ?>   " readonly>
                <br>
			      <input name="submit" type="submit" value="Guardar">
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
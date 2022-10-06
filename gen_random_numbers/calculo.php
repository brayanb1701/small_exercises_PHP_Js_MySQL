<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div id="page">
		<div id="header">
			<div class="background">
				<h1 id="logo"> <a href="index.html"><center> Funcion Cuadratica </center></a> </h1>
				<div id="navigation">
					<ul><li></li>
						<li></li>
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
$dfvn_a=$_REQUEST['a'];
$dfvn_b=$_REQUEST['b'];
$dfvn_c=$_REQUEST['c'];

if(is_numeric($dfvn_a)){
if(is_numeric($dfvn_b)){
if(is_numeric($dfvn_c)){

if($dfvn_a==0){

echo '<script> alert("Error, division por 0"); </script>';

}
else{
if ($dfvn_a!=0) {

$dfvn_d=(($dfvn_b*$dfvn_b)-(4*$dfvn_a*$dfvn_c));

$dfvn_imaginario="";

if ($dfvn_d<0){

$dfvn_imaginario="i";

$dfvn_d=($dfvn_d*-1);

}

$dfvn_d=sqrt($dfvn_d);

/*if (r<0){

r=r*-1;

}*/
$dfvn_x1=(-$dfvn_b-$dfvn_d)/(2*$dfvn_a);
$dfvn_x2=(-$dfvn_b+$dfvn_d)/(2*$dfvn_a);

echo "El valor de X1 es:".$dfvn_x1.$dfvn_imaginario."<br>";
echo "El valor de X2 es:".$dfvn_x2.$dfvn_imaginario;
}


else {

	echo"Error matematico";
}
}
}
}
}
else{
echo '<script> alert("Solo se permiten numeros"); </script>';
}

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
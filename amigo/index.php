<form action="index.php" method="post">
Digite numero de 20 digitos: <input type="text" id="num" name="num">
<input type="submit" value="Enviar">
</form>


<?php


if(isset($_POST['num'])){
	$num= $_POST['num'];
if (strlen($num)==20){
	if(substr($num, 9, 2)=="00"){
		echo "El numero digitado es amigo";
	}
	else{
		echo "El numero digitado no es amigo";
	}
}


else{
	echo "Error; no es un numero de 20 digitos";
}
}

?>
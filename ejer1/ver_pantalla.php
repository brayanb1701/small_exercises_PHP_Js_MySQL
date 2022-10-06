<?php 
	$servidor		= 'localhost';
	$usr_sistema	= 'root';
	$pass_sistema	= 'projects';
	$base_datos		= 'informatica';
	$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
	if (!$conexion){
		header ("Location: index.php?mensaje=error de conexion.");
		exit();		   
	}
//-- ------------------------------------------------------------------------------------------------
// -- Cambia dependiendo del ejercicio
		$sql= "SELECT id, nota1, nota2, nota3, nota4, promedio "
			  ."FROM ".$base_datos.".notas  "
			  ."ORDER by nota1, nota2, nota3, nota4, promedio";   
		$sql = mysqli_query($conexion,$sql);	 // No cambia
//-- ------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Promedio</title>
</head>

<body><table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle"><strong>I.d.</strong></td>
    <td align="center" valign="middle"><strong>Nota1</strong></td>
    <td align="center" valign="middle"><strong>Nota2</strong></td>
    <td align="center" valign="middle"><strong>Nota3</strong></td>
    <td align="center" valign="middle"><strong>Nota4</strong></td>
    <td align="center" valign="middle"><strong>Promedio</strong></td>
  </tr>
<?php
		while($rs = mysqli_fetch_array($sql)) { 
			$id			= $rs[0];
			$nota1	= $rs[1];
			$nota2 	= $rs[2];
			$nota3 	= $rs[3];
			$nota4 	= $rs[4];
			$promedio 	= $rs[5];
?>			  
  <tr>
    <td align="center" valign="middle"><?=$id;?></td>
    <td align="center" valign="middle"><?=$nota1;?></td>
    <td align="center" valign="middle"><?=$nota2;?></td>
    <td align="center" valign="middle"><?=$nota3;?></td>
    <td align="center" valign="middle"><?=$nota4;?></td>
    <td align="center" valign="middle"><?=$promedio;?></td>
  </tr>
<?php }?>  
  </table>
</body>
</html>
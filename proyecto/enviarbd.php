<?php 


$servidor	= 'localhost';
$datos	= 'monsalve_17_11a';
$tabla	= 'tatiana';
$sistema	= 'root';
$contraseña	= 'alumnos1'; 
$db_connection= mysql_connect($servidor, $sistema, $contraseña);
$codigo= ($_REQUEST['codigo']);
$nombre= ($_REQUEST['nombre']);
$telefono= ($_REQUEST['telefono']);
$asunto= ($_REQUEST['asunto']);
$descripcion = ($_REQUEST['descripcion']);
$medio = ($_REQUEST['medio']);
if(strlen($descripcion)>=10){
if($medio=="database"){


if (!$db_connection) {
	header('Location: index.php?mensaje=No se ha podido conectar a la base de datos');
}


else{
 
$insert_value = 'INSERT INTO `' . $datos . '`.`'.$tabla.'` (`codigo` , `nombre` , `telefono`, `asunto`, `descripcion`) 
VALUES ("'. $codigo .'", "' . $nombre . '","' . $telefono . '","' . $asunto . '","' . $descripcion . '")';


    


mysql_select_db($datos, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
mysql_close($db_connection);

header ("Location: index.php?mensaje=Registro Incluido con Exito.");
}		


exit(); 

}

if($medio=="e_page"){

require_once("librerias/fpdf.php"); //-- Llama la Libreria
class PDF extends FPDF{} //-- Define una clase de la Libreria


$pdf	= new PDF(); //-- Crea una variable para trabajar con la Libreria				
$pdf->AddPage(); //-- Crea una nueva pagina en el archivo Pdf
$pdf->SetFont('Arial','',8); //-- Define el tipo de fuente y el tamaño
$pdf->MultiCell(0, 3, utf8_decode('Codigo: '.$codigo) );
$pdf->MultiCell(0, 3, utf8_decode('Nombre: '.$nombre) );
$pdf->MultiCell(0, 3, utf8_decode('Telefono: '.$telefono) );
$pdf->MultiCell(0, 3, utf8_decode('Asunto: '.$asunto) );
$pdf->MultiCell(0, 3, utf8_decode('Descripcion: '.$descripcion) );
//$pdf->MultiCell(0, 3, utf8_decode('Codigo: '.$codigo) );
//$pdf->MultiCell(0, 3, utf8_decode('Codigo: '.$codigo) );





//-- Imprime en el Pdf la Variable que viene del index.php
//-- utf8_decode: Funcion PHP para convertir caracteres especiales, que se vean bien los acentos y otras letras del alfabeto latino.
$pdf->Output();  //-- Cierra la variable del Pdf y visualiza en pantalla el resultado en un Pdf.


}

}

else{
header ("Location: index.php?mensaje=La descripcion debe tener mas de 10 caracteres");
exit(); 
}



?>
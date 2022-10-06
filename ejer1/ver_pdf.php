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
require_once("librerias/fpdf.php"); //-- Llama la Libreria
class PDF extends FPDF{} //-- Define una clase de la Libreria
$texto	= $_POST['texto']; //-- Captura la variable del index.php
$pdf	= new PDF(); //-- Crea una variable para trabajar con la Libreria				
$pdf->AddPage(); //-- Crea una nueva pagina en el archivo Pdf
$pdf->SetFont('Arial','',8); //-- Define el tipo de fuente y el tamaño
//-- ------------------------------------------------------------------------------------------------
		$sql= "SELECT id, nota1, nota2, nota3, nota4, promedio "
			  ."FROM ".$base_datos.".notas  "
			  ."ORDER by nota1, nota2, nota3, nota4, promedio";   
		$sql = mysqli_query($conexion,$sql);	
//-- ------------------------------------------------------------------------------------------------
		while($rs = mysqli_fetch_array($sql)) { 
			$id			= $rs[0];
			$nota1	= $rs[1];
			$nota2 	= $rs[2];
			$nota3 	= $rs[3];
			$nota4 	= $rs[4];
			$promedio 	= $rs[5];
			$linea = "[ " . $id . " ]   -   [ " . $nota1 . " ]   -   [ " . $nota2 . " ]   -   [ " . $nota3 . " ]   -   [ " . $nota4 . " ]   -   [ " . $promedio . " ]";
$pdf->MultiCell(0, 3, utf8_decode($linea) ); //-- Imprime en el Pdf la Variable que viene del index.php
$pdf->Ln();
		}
//-- utf8_decode: Funcion PHP para convertir caracteres especiales, que se vean bien los acentos y otras letras del alfabeto latino.
$pdf->Output();  //-- Cierra la variable del Pdf y visualiza en pantalla el resultado en un Pdf.
?>
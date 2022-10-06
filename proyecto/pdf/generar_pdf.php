<?php 
require_once("librerias/fpdf.php"); //-- Llama la Libreria
class PDF extends FPDF{} //-- Define una clase de la Libreria
$texto	= $_POST['texto']; //-- Captura la variable del index.php
$pdf	= new PDF(); //-- Crea una variable para trabajar con la Libreria				
$pdf->AddPage(); //-- Crea una nueva pagina en el archivo Pdf
$pdf->SetFont('Arial','',8); //-- Define el tipo de fuente y el tamaño
$pdf->MultiCell(0, 3, utf8_decode($texto) ); //-- Imprime en el Pdf la Variable que viene del index.php
//-- utf8_decode: Funcion PHP para convertir caracteres especiales, que se vean bien los acentos y otras letras del alfabeto latino.
$pdf->Output();  //-- Cierra la variable del Pdf y visualiza en pantalla el resultado en un Pdf.
?>
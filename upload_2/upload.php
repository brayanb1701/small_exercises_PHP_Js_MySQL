<?php
   $destination_path = getcwd().DIRECTORY_SEPARATOR;
   $result = 0;
   
	$nombre = basename( $_FILES['myfile']['name']);
	$cantidad = strlen($jscl);
	$cantidad_real= $cantidad-4;
	$fecha= date("Y-m-d H-i-s");
$nombre_descargar= "brbo - ".$fecha. $nombre;
	if(substr($nombre, $cantidad_real, 1)== ".") {
$extension = substr($nombre, $cantidad_real);  
 }
else {
$cantidad_real = $cantidad-5;
$extension = substr($nombre, $cantidad_real); 
 }

if ( (strtolower($extension) == ".doc") || (strtolower($extension) == ".docx") ){


   $target_path = $destination_path . '/archivo/'.$nombre_descargar;
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   sleep(1);

}
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>

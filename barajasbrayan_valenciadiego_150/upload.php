<?php
   $destination_path = getcwd().DIRECTORY_SEPARATOR;
   $result = 0;
   $tipo_archivo= $_REQUEST["tipo_archivo"];
	$nombre = basename( $_FILES['myfile']['name']);
	$cantidad = strlen($nombre);
	$cantidad_real= $cantidad-4;


	if(substr($nombre, $cantidad_real, 1)== ".") {
$extension = substr($nombre, $cantidad_real);  
 }
else {
$cantidad_real = $cantidad-5;
$extension = substr($nombre, $cantidad_real); 
 }

if($tipo_archivo=="todos"){
 $target_path = $destination_path . '/archivo/'.$nombre;
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   sleep(1);

}

else{
   if ( (strtolower($extension) == $tipo_archivo) ){


   $target_path = $destination_path . '/archivo/'.$nombre;
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   sleep(1);

   }
}
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>

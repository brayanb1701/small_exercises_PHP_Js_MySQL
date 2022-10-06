	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Promedio</title>
</head>
<?php
  $mensaje = isset($_GET['mensaje'])?$_GET['mensaje']:"";
  $promedio=isset($_GET['promedio'])?$_GET['promedio']:"";
  if ($mensaje != ""){
?>
    <script type="text/javascript">alert("<?=$mensaje;?>");</script>
<?php }?>

<body>
<form id="form1" name="form1" method="post" action="ejer.php">
  <p>Nota1: 
    <input type="text" name="nota1" id="nota1" />
  </p>
  
  <p>Nota2: 
    <input type="text" name="nota2" id="nota2" />
  </p>
  
  <p>Nota3: 
    <input type="text" name="nota3" id="nota3" />
  </p>

  <p>Nota4: 
    <input type="text" name="nota4" id="nota4" />
  </p>
   <p>Promedio:  <?php echo $promedio; ?>
    
  </p>
  
  <p>
    <input type="submit" name="button" id="button" value="Promediar" />
  </p>
  <p>
    <a href="ver_pantalla.php" target="_blank">Ver Resultados en Pantalla</a>
    </p>
    <p>&nbsp;</p>
    <p><a href="ver_pdf.php" target="_blank">Ver Resultados en Pdf</a></p>
  
  

</form>


<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
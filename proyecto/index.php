<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: PhotoBusiness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PROYECTO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<?php
  $mensaje = isset($_GET['mensaje'])?$_GET['mensaje']:"";
  
  if ($mensaje != ""){
?>
    <script type="text/javascript">alert("<?=$mensaje;?>");</script>
<?php }?>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <div id="search">
      <form action="#" method="post">
        <fieldset>

      </form>
    </div>
  </div>
</div>
<div class="wrapper col2">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">PROYECTO</a></h1>

    </div>
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->


    <ul id="topnav">
      
 
      <li><a href="derechos.php">Derechos</a></li>
    <li><a href="index_upload.php">Subir Archivos</a></li>-->
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
            <h2>PROYECTO</h2>
            <p></p>

         
            <form action="enviarbd.php" id="contact-form" method="post">
                <div class="input-prepend">
               
                 CODIGO   <input class="span4" id="codigo" name="codigo" pattern="[0-9]{5}"  type="tel" placeholder="codigo" required>
                </div>


                <div class="input-prepend">
               
                 NOMBRE   <input class="span4" id="nombre" name="nombre"  type="text" placeholder="nombre" required>
                </div>


                <div class="input-prepend">
               
                  TELEFONO  <input class="span4" id="telefono" name="telefono" pattern="[0-9]{7,10}"   type="tel" placeholder="Telefono" required>
                </div>


                <div class="input-prepend">
               
                  ASUNTO  <select id="asunto" name="asunto" >
				  <option value="Notas">Notas</option>
				  <option value="Error de codigo">Error de codigo</option>
				  <option value="Comentario">Comentario</option>
				  </select>
                </div>
                

              DESCRIPCION  <textarea id="descripcion" required name="descripcion" placeholder="descripcion" class="span6"></textarea><br><br>
MEDIO                
<input type="radio" name="medio" id="medio" value="e_page" required>hoja electronica 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="medio" id="medio" value="database" required>base de datos
                
                
                
                <div class="row" >
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Enviar">
                    </div>
                </div>
            </form>
    <!-- End Contact Form -->
   <?php
   
   ?>
<div class="wrapper col7">
  <div id="copyright">

    <p >Copyright &copy; 2014 - All Rights Reserved - <a href="#">PhotoBusiness</a></p><br>
  </div>
</div>
</body>
</html>
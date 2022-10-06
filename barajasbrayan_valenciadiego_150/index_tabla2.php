<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi web</title>
<meta name="keywords" content="free css layout, old blog template, CSS, HTML" />
<meta name="description" content="Old Blog Template - free website template provided by TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
<script type="text/javascript" src="tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
    $(".botonExcel").click(function(event) {
        $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
        $("#FormularioExportacion").submit();
});
});
</script>
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
</head>
<?php
$fila=$_REQUEST['fila'];
$columnas=$_REQUEST['columnas'];
$forma=$_REQUEST['forma'];
$color=$_REQUEST['color'];
$col = -1;
$texto=$_REQUEST["texto"];
$mitad=round($fila/2);
?>
<body>

	    <?php
       include "cabecera.php";
               ?>
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    <div class="post_title">
                    	Ver tabla</div>
                  <!--  <div class="post_info">
                    	Posted by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a>, December 7, 2048 at 10:12 am, in <a href="#">Player.</a>
                    </div>-->
                    <div class="post_body">
                        
                        <?php
if($forma == "n"){
 ?>

<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<?php for ($i = 1; $i <= $fila; $i++){?>
  <tr>
            <?php for ($j= 1; $j <= $columnas; $j++){?>
                    <?php if ($i == $j || $j==1 || $j==$columnas){//Es diagonal principal?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php }else{?>
                    <td>&nbsp;</td>
                    <?php }?>
            <?php }?>  
  </tr>
<?php }?> 


</table>

 <?php }

 if($forma == "p"){
 ?>

<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<?php for ($i = 1; $i <= $fila; $i++){?>
  <tr>
            <?php for ($j= 1; $j <= $columnas; $j++){?>
                    <?php if ($i == 1 || $j==1 || ($j==$columnas && $i<=$mitad) || $i==$mitad){//Es diagonal principal?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php }else{?>
                    <td>&nbsp;</td>
                    <?php }?>
            <?php }?>  
  </tr>
<?php }?> 


</table>

 <?php }
                    
                    if($forma == "z"){
 ?>

 <table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<?php for ($i = 1; $i <= $fila; $i++){?>
  <tr><?php $col ++;?>
            <?php for ($j= 1; $j <= $columnas; $j++){?>
                    <?php if ( ($columnas - $col)  == $j){//Es diagonal Inversa o secundaria?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php } else{ if($i==1 ){?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php } else{?>
                    <?php   if($i==$fila ){?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php } else{ ?>
                    <td align="center">&nbsp;</td>
                    <?php
                    } } } 
                    ?>
                     
            <?php  }?>  
  </tr>
<?php }?>  
</table>


 <?php }
 
 if($forma == "ajedrez"){
 ?>

<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<?php for ($i = 1; $i <= $fila; $i++){?>
  <tr>
            <?php for ($j= 1; $j <= $columnas; $j++){?>
                    <?php if (($i%2!=0 && $j%2!=0) || ($i%2==0 && $j%2==0)){?>
                    <td align="center" bgcolor="<?php echo $color; ?>"><?php echo $texto; ?></td>
                    <?php }else{?>
                    <td>&nbsp;</td>
                    <?php }?>
            <?php }?>  
  </tr>
<?php }?> 


</table>

 <?php }
 ?>
 <form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <br /><img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
<br>
 <p align="left"><form action="index_tabla.php"><input type="submit" value="Regresar" ></form></p>



                  </div>
                </div>
                </div> <!-- End of a post-->
                
                
                
            </div> <!-- end of content left -->
        
            
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->

	<div id="templatemo_bottom_panel">
   	  <div id="templatemo_bottom_section">
          
            
        

    </div> <!-- end of templatemo bottom panel -->
    
    <div id="templatemo_footer_panel">
    	<div id="templatemo_footer_section">
			<div >Copyright © 2016 <a href="about.php">Brayan Barajas, Diego Valencia</a> | 
              <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></div>
    	</div>
    </div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
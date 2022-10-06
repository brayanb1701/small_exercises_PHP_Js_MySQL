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
<title>EVALUACION</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
</script>
   <link href="style_upload/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
<!--
function startUpload(){
      document.getElementById('f1_upload_process_loader').style.visibility = 'visible';
      document.getElementById('f1_upload_form_loader').style.visibility = 'hidden';
      return true;
}
function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg_loader">El Archivo ha sido Cargado con Exito al Servidor!<\/span><br/><br/>';
         alert("El Archivo ha sido Cargado con Exito al Servidor!");
      }
      else {
         result = '<span class="emsg_loader">Ocurrio un error al tratar de Cargar el Archivo!<\/span><br/><br/>';
          alert("Ocurrio un error al tratar de Cargar el Archivo!");
      }
      document.getElementById('f1_upload_process_loader').style.visibility = 'hidden';
      document.getElementById('f1_upload_form_loader').innerHTML = result + '<label class="label_loader" >Archivo: <input name="myfile" type="file" size="30" /><\/label><label class="label_loader" ><input type="submit" name="submitBtn" class="sbtn_loader" value="Aceptar" /><\/label>';
      document.getElementById('f1_upload_form_loader').style.visibility = 'visible';      
      return true;   
}
//-->
</script> 
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
      <h1><a href="index_upload.php">Subir Archivos</a></h1>

    </div>
    <ul id="topnav">
      
 
      <li><a href="derechos.php">Derechos</a></li>
    <li class="active"><a href="index_upload.php">Subir Archivos</a></li>-->
      <li ><a href="index.php">Home</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="post_title">
                    	Subir Archivos</div>
                  <!--  <div class="post_info">
                    	Posted by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a>, December 7, 2048 at 10:12 am, in <a href="#">Player.</a>
                    </div>-->
                    <div class="post_body">
                        <br>
                      <div id="container_loader">
            <div id="header_loader">
                <div id="header_left_loader"></div>
                <div id="header_main_loader">Subir Archivos al Servidor...</div>
                <div id="header_right_loader"></div>
            </div>
            <div id="content_loader">
                <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
                     <p id="f1_upload_process_loader">Cargando...<br/><img src="style_upload/loader.gif" /><br/></p>
                     <p id="f1_upload_form_loader" align="center"><br/>
                         <label class="label_loader" >Archivo:  
                              <input name="myfile" type="file" size="30" />
                         </label>
                         <br />
                        <label class="label_loader" >
                     
                        </label><br>
                         <label class="label_loader" >
                             <input type="submit" name="submitBtn" class="sbtn_loader" value="Aceptar" />
                         </label>
                     </p>
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                 </form>
             </div>
             <div id="footer_loader"><a href="#">...</a></div>
         </div>

    <!-- End Contact Form -->
   
<div class="wrapper col7">
  <div id="copyright">

    <p >Copyright &copy; 2014 - All Rights Reserved - <a href="#">PhotoBusiness</a></p><br>
  </div>
</div>
</body>
</html>












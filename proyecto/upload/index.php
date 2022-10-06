<!-- Tomado de: http://www.ajaxf1.com/tutorial/ajax-file-upload-tutorial.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Como Cargar Archivos al Servidor...</title>
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
      }
      else {
         result = '<span class="emsg_loader">Ocurrio un error al tratar de Cargar el Archivo!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process_loader').style.visibility = 'hidden';
      document.getElementById('f1_upload_form_loader').innerHTML = result + '<label class="label_loader" >Archivo: <input name="myfile" type="file" size="30" /><\/label><label class="label_loader" ><input type="submit" name="submitBtn" class="sbtn_loader" value="Aceptar" /><\/label>';
      document.getElementById('f1_upload_form_loader').style.visibility = 'visible';      
      return true;   
}
//-->
</script>   
</head>
<body class="body_loader">
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
                         <br /><label class="label_loader" >
                             <input type="submit" name="submitBtn" class="sbtn_loader" value="Aceptar" />
                         </label>
                     </p>
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                 </form>
             </div>
             <div id="footer_loader"><a href="#">...</a></div>
         </div>
</body>   
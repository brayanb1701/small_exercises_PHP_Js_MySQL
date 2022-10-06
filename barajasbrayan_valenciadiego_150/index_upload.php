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
      document.getElementById('f1_upload_form_loader').innerHTML = result + '<label class="label_loader" >Archivo: <input name="myfile" type="file" size="30" /><\/label><label class="label_loader" > Extension: <select name="tipo_archivo" id="tipo_archivo"><option value=".ppt" selected>ppt</option><option value=".doc">doc</option><option value=".docx">docx</option> <option value=".xls">xls</option>  <option value=".xlsx">xlsx</option> <option value=".xlsm">xlsm</option> <option value=".jpg">jpg</option> <option value=".jpeg">jpeg</option><option value=".gif">gif</option><option value=".png">png</option><option value=".pdf">pdf</option><option value=".exe">exe</option><option value=".rar">rar</option>  <option value=".zip">zip</option> <option value="todos">Todos</option></select>  </label><label class="label_loader" ><input type="submit" name="submitBtn" class="sbtn_loader" value="Aceptar" /><\/label>';
      document.getElementById('f1_upload_form_loader').style.visibility = 'visible';      
      return true;   
}
//-->
</script> 
</head>
<body class="body_loader">

	    <?php
       include "cabecera.php";
               ?>
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
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
                          Extension: <select name="tipo_archivo" id="tipo_archivo">
                            <option value=".ppt" selected>ppt</option>
                            <option value=".doc">doc</option>
                            <option value=".docx">docx</option>
                            <option value=".xls">xls</option>
                            <option value=".xlsx">xlsx</option>
                            <option value=".xlsm">xlsm</option>
                            <option value=".jpg">jpg</option>
                            <option value=".jpeg">jpeg</option>
                            <option value=".gif">gif</option>
                            <option value=".png">png</option>
                            <option value=".pdf">pdf</option>
                            <option value=".exe">exe</option>
                            <option value=".rar">rar</option>
                            <option value=".zip">zip</option>
                            <option value="todos">Todos</option>
                          </select>
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
				<br>


                  </div>
                </div>
                </div> <!-- End of a post-->
                
                
                
            </div> <!-- end of content left -->
        
            <div id="templatemo_content_right">
            
            	<!--<div class="templatemo_right_section">
					<div class="tag_section">
                        <ul id="countrytabs" class="shadetabs">
                            <li><a href="#" rel="search" class="selected">Search</a></li>       
                            <li><a href="#" rel="archive">Archive</a></li>
                        </ul>
					</div>
				
                    <div class="tabcontent_section">
                        <div id="search" class="tabcontent">
                            <form method="get" action="#">
                                <input class="inputfield" name="searchkeyword" type="text" id="searchkeyword"/>
                                <input type="submit" name="submit" class="button" value="Search" />
                            </form>                    
                        </div>
					
                        
		            
                        <div id="archive" class="tabcontent">
                            <ul>
                                <li><a href="#">January 2049</a></li>
                                <li><a href="#">December 2048</a></li>
                                <li><a href="#">November 2048</a></li>
                                <li><a href="#">October 2048</a></li>
                                <li><a href="#">September 2048</a></li>
                            </ul>                         
                        </div>
					</div>

					<script type="text/javascript">
                    
                    var countries=new ddtabcontent("countrytabs")
                    countries.setpersist(true)
                    countries.setselectedClassTarget("link") //"link" or "linkparent"
                    countries.init()
                    
                    </script> <!--- end of tag 
                </div>-->
           
                               <div class="templatemo_right_section">
                	<h2>Archivo</h2>
					<ul>
                
                <?php
                include_once "archivo_lat.php";
               ?>
                                    </ul>  
                </div>
                
                
            </div> <!-- end of right content -->
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
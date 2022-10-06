<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi web</title>
<meta name="keywords" content="free css layout, old blog template, CSS, HTML" />
<meta name="description" content="Old Blog Template - free website template provided by TemplateMo.com" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="../tabcontent.css" />
<script type="text/javascript" src="../tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
</head>
<body>

 <?php
                include "Plantilla/cabecera.php";
               ?>
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    <div class="post_title">
                    	Título</div>
                  <!--  <div class="post_info">
                    	Posted by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a>, December 7, 2048 at 10:12 am, in <a href="#">Player.</a>
                    </div>-->
                    <div class="post_body">
                      
                      <p>Información.</p>
					  <p></p>
					  <div align="right">
					  <?php
					  /* $publicaciones=(glob("posts/{*.php}",GLOB_BRACE));
					  $num_publicaciones=count(glob("carpeta/{*.php}",GLOB_BRACE));
					  $reciente= "$num_publicaciones.php";
					  $antiguo="1.php";*/
//Icono de "nextpage"

					  ?>
					    <input name="submit2" type="button" value="Atrás"   style="background-color: transparent; font-weight:bolder" onclick="location=''"/>
					    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <input name="submit3" type="button" value="Siguiente"  style="background-color: transparent; font-weight:bolder" onclick="location=''" />
					  </div>
					  </p>
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
                include_once "Plantilla/archivo.php";
               ?>
                                    </ul>  
                </div>
                <div class="templatemo_right_section">
                	<h2>Search</h2>
					<form method="get" action="http://www.google.com">
                        <input class="inputfield" name="keyword" type="text" id="keyword"/>
                        <input type="submit" name="submit" class="button" value="Search" />
                    </form>
                </div>
                
            </div> <!-- end of right content -->
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->

	<div id="templatemo_bottom_panel">
    	<div id="templatemo_bottom_section">
          <div class="templatemo_bottom_section_content">
            <h3>About this blog</h3>
               <p>Free Template provided by <a href="http://www.templatemo.com" target="_blank">templatemo.com</a> for blog websites. You may download, modify and use this website layout for personal or commercial websites.
                    Credits go to <a href="http://www.bittbox.com/freebies/free-hi-resolution-wood-textures/" target="_blank">bittbox.com</a> for wood texture, <a href="http://www.brusheezy.com/brush/1108-Floral-Pack-1" target="_blank">ElenaSham</a> and <a href="http://www.brusheezy.com/brush/957-Enchanting-Flowers" target="_blank">Coby17</a> for brushes.<br />
			El blog ha sido editado por Brayan Barajas.</p>
          </div>
            
        </div>
    </div> <!-- end of templatemo bottom panel -->
    
    <div id="templatemo_footer_panel">
    	<div id="templatemo_footer_section">
			<div >Copyright © 2016 <a href="about.php">Brayan Barajas</a> | 
              <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></div>
    	</div>
    </div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
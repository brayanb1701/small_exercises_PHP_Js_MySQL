<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JQuery Excel</title>
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
$fila = 25;
$columna = 25;
?>
<body>
<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<?php for ($i = 1; $i <= $fila; $i++){?>
  <tr>
			<?php for ($j= 1; $j <= $columna; $j++){?>
            		<?php if ($i == $j){//Es diagonal principal?>
                    <td align="center"><b>Brayan Barajas Y Diego Valencia</b></td>
                    <?php }
                    else{ ?>
                    <td>&nbsp;</td>
                    <?php }
                    ?>

                    <?php }?>  
  </tr>
<?php }?>  


</table>
<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
</body>
</html>

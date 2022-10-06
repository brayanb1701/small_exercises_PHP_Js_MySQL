<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PROYECTO-Pdf</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
function enviar_datos(){
	if (document.formulario1.texto.value.length >= 10){
		document.formulario1.submit();
	}
	else{
		alert("Debe digitar al menos 10 caracteres para Crear el Pdf.");
		document.formulario1.texto.focus();
	}
}
</script>
<body>
<form action="generar_pdf.php" method="post" name="formulario1" target="_blank" id="formulario1">
  <table width="100%" border="0">
    <tr>
      <td colspan="3"><h1>Crear Pdf en Php</h1></td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td align="center" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="22%" align="right" valign="top">Texto a Enviar&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td width="71%" align="left" valign="top"><textarea name="texto" rows="8" class="caja_texto" id="texto"></textarea></td>
      <td width="7%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Nota</strong>: Debe digitar al menos 10 caracteres para poder crear el <strong>Pdf</strong>.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="button" type="button" class="botoncito" id="button" value="Crear Pdf" onclick="enviar_datos();"/></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
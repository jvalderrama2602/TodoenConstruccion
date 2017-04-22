<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Tipo Usuario</title>

<script type="text/javascript">
function validar(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron =/[A-Za-z\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
} 
</script>

<script language="javascript" type="text/javascript">
function getXMLHTTPRequest() 
{
	try { req = new XMLHttpRequest(); } 
	catch(err1) 
	{
  		try { req = new ActiveXObject("Msxml2.XMLHTTP"); } 
		catch (err2) 
		{try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch (err3) { req = false; }}
	}
	return req;
}

var http = getXMLHTTPRequest();

function enviarHTTP () 
{
	var estado = window.document.formulario_usuario.tipo.value; 
	var nombre = window.document.formulario_usuario.nombre.value; 
	
	if(estado!=0 && nombre!="")
	{
		var query= "estado=" + estado +"&nombre=" + nombre;
		http.open ("GET", "grabar_ciudad.php?" + query, true);
		http.onreadystatechange = respuestaHTTP;
		http.send(null); // se envia la petición
	}
}

function respuestaHTTP () 
{
	if (http.readyState == 4) 
	{  
		if (http.status == 200) 
		{ 
			var respuesta_php = http.responseText; 
			
			if(respuesta_php=="")
			{
				document.getElementById('x1').style.display = '';
				document.getElementById('x2').style.display = 'none';
			}
			else
			{
				document.getElementById('x1').style.display = 'none';
				document.getElementById('x2').style.display = '';
				window.document.formulario_usuario.nombre.value="";
			}	
		}
	}
}
</script>
</head>

<body>

<?
require_once('../../conexion/conexion.php');
	
	$sql2 = "SELECT idestado,nombre_estado FROM estado WHERE suspendido_estado='' ORDER BY nombre_estado ASC ";
	$result2 = $db->query($sql2);
?>
<form name="formulario_usuario">
<table width="385" align="center">
<tr id="x1" style="display: none"><td colspan="2">La Ciudad Ya Existe</td></tr>
<tr id="x2" style="display: none"><td colspan="2">La Ciudad  Se Registro Correctamente</td></tr>
<tr><td align="center" colspan="2">ESTADO</td></tr>
<tr>
	<td width="99">ESTADO</td>
	<td>
		<select name="tipo" id="test3">
        	<option value="0">Seleccione ....</option>
            <?
			while ($query_result = $result2->fetch_array())
			{
				$idestado= $query_result['idestado'];
				$nombre_estado= $query_result['nombre_estado'];
				?><option <? echo"value='$idestado'"; ?>><? echo"$nombre_estado"; ?></option><?
			}
			?>
        </select>	
	</td>
</tr>
<tr>
	<td>NOMBRE</td>
    <td width="274">
        <input type="text" name="nombre" size="45" maxlength="20" placeholder=" Nombre De La Ciudad" onkeypress="return validar(event)"/>
    </td>
</tr>
</table>

<table  width="360" align="center">
<tr><td height="15"></td></tr>
<tr>
	<td align="center"><button type="button" value="Grabar" onclick="enviarHTTP()">Grabar</button> </td>
</tr>
</table>

</form>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar Usuario</title>



<script type="text/javascript">
function validar(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron =/[A-Za-z\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
</script>

</head>

<body>
<?
require_once('../../conexion/conexion.php');

	$sql2 = "SELECT idtipo_super_usuario,tipo_nombre FROM tipo_super_usuario WHERE suspendido=''";
	$result2 = $db->query($sql2);
?>

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
	var tipo = document.getElementById("test3").value;
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var email = document.getElementById("email").value;
	var login = document.getElementById("login").value;
	var pass = document.getElementById("password").value;
	var confirmacion = document.getElementById("confirmacion").value;
	var cont=0;

		alert(tipo);

	if(pass==confirmacion)
	{

		var query="tipo=" + tipo + "&nombre=" + nombre +"&apellido=" + apellido +"&email=" + email +"&login=" + login +"&pass=" + pass +"&confirmacion=" + confirmacion;
		http.open ("GET", "grabar_usuario.php?" + query, true);
		http.onreadystatechange = respuestaHTTP;
		http.send(null); // se envia la petición
	}
	else
	{alert('No son iguales el pass')}
}


function respuestaHTTP ()
{
	if (http.readyState == 4)
	{
		if (http.status == 200)
		{
			var respuesta_php = http.responseText;

			alert(respuesta_php);

			if(respuesta_php!=0)
			{
				alert('Se Ha Registrado Correctamente')

			}
			else
			{
				alert('NO Se Ha Registrado')

			}
		}
	}
}

</script>

<table width="400" align="center">
<tr><td width="118"></td></tr>
<tr><td align="center" colspan="2">NUEVO USUARIO</td></tr>
<tr>
	<td>TIPO USUARIO</td>
	<td>
		<select name="tipo" id="test3" required>
        	<option value="0">Seleccione ....</option>
            <?
			while ($query_result = $result2->fetch_array())
			{
				$idtipo_usuario= $query_result['idtipo_super_usuario'];
				$nombre_usuario= $query_result['tipo_nombre'];
				?><option <? echo"value='$idtipo_usuario'"; ?>><? echo"$nombre_usuario"; ?></option><?
			}
			?>
        </select>
	</td>
</tr>
<tr>
	<td>NOMBRE</td>
    <td width="270">
        <input type="text" name="nombre" id='nombre' size="45" maxlength="20" placeholder=" Nombre Del Usuario" onkeypress="return validar(event)" required="required"/>
    </td>
</tr>
<tr>
	<td>APELLIDO</td>
    <td>
       <input type="text" name="apellido" id='apellido' size="47" maxlength="20" placeholder=" Apellido Del Usuario" required="required" />
    </td>
</tr>
<tr>
	<td>E-MAIL</td>
    <td>
       <input type="email" name="email" id='email' size="47" maxlength="20" placeholder=" Ejemplo@dominio.com" required="required" />
    </td>
</tr>
<tr>
	<td>LOGIN</td>
    <td>
       	<input type="text" name="login" id='login' size="47" placeholder=" Login Del Usuario" required="required"  />
    </td>
</tr>
<tr>
	<td>PASSWORD</td>
    <td>
       <input type="password" name="password" id='password' size="47" maxlength="20" placeholder=" Paswword Del Usuario" required="required" />
    </td>
</tr>
<tr>
	<td>CONFIRMACION</td>
    <td >
       <input type="password" name="confirmacion" id='confirmacion' size="47" maxlength="20" placeholder=" Confirmacion Paswword Del Usuario" required="required" />
    </td>
</tr>
<tr>
	<td align="center" colspan="2"><button type="button" value="Grabar" onclick="enviarHTTP()">Grabar</button> </td>
</tr>
</table>

</body>
</html>
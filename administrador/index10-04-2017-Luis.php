<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link rel="stylesheet" id="global-css" href="style.css" type="text/css" media="all" />

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
	var login= document.formulario_usuario.login.value;
	var password= document.formulario_usuario.password.value;
	var cont=0;
	
	if(login==""){ alert("El Login Se Encuentra Vacio"); }
	
	if(password=="")
	{ alert("El Password Se Encuentra Vacio");cont=1; }

	if(cont==0)
	{ 
		var query= "login=" + login +"&password=" + password;
		http.open ("GET", "consultar_usuario.php?" + query, true);
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
			
				if(respuesta_php==20000)
				{
					document.getElementById('x1').style.display = '';
				 	document.getElementById('x2').style.display = 'none';
				}
			
				if(respuesta_php==30000)
				{
				 	document.getElementById('x1').style.display = 'none';
					document.getElementById('x2').style.display = '';
				}
				
				if(respuesta_php<20000)
				{
					document.forms["formulario_usuario"].submit();	
				}
			
		}
	}
}
</script>
</head>

<body>

<header>
	<div class="logo"><img src="../imagen/logo.png" width="373" height="67" /></div>
</header>
	

<form name="formulario_usuario" method="post" action="entrar.php">
<table width="400" align="center" border="1">
	<tr id="x1" style="display: none" ><td colspan="2">El Usuario NO Existe</td></tr>
	<tr id="x2" style="display: none"><td colspan="2">El clave errada</td></tr>
<tr><td align="center" colspan="2">INICIO DE SESION</td></tr>
<tr>
	<td>LOGIN</td>
    <td>
       	<input type="text" name="login" id="login" size="47" placeholder=" Login Del Usuario" />
    </td>
</tr>
<tr>
	<td>PASSWORD</td>
    <td>
       <input type="password" name="password" size="47" maxlength="20" placeholder=" Paswword Del Usuario" />
    </td>
</tr>

<tr>
	<td align="center" colspan="2"><button type="button" value="Grabar" onclick="enviarHTTP()">Entrar</button> </td>
</tr>
</table>

</form>
</body>
</html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGUEO</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<script language="javascript">
function ValidarLogin()
{
	var username=window.document.frmForma.username.value;
	var pass=window.document.frmForma.pass.value;

	if(username=="" || pass=="")
	{ alert("Uno o Varios Campos Se Encuentran Vacios"); }
	else
	{ document.forms["frmForma"].submit();	}
}
</script>
</head>
<body bgcolor="#1C6F06">
<form action="entrar.php" method="post"  name="frmForma" title="ENTRAR AL SISTEMA">
<table align="center">
<tr>
	<td>
		<span class=" letrablanca">Usuario</span>
		<input type="text" align="LEFT" size="20" maxlength="30" name="username" title="USUARIO" />&nbsp;
		<span class=" letrablanca">Password</span>
		<input type="password" size="20" maxlength="20" name="pass" title="PASSWORD" />&nbsp;&nbsp;
		<input type="button" value="Ingresar" name="Ingresa" title="INGRESA" onClick="ValidarLogin();"/>
	</td>
</tr>
</table>
</form> 
</body>
</html>
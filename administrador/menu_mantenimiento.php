<?php
session_start();
$usuario = $_SESSION["s_username"];
$tipouser = $_SESSION["tipouser"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MANTENIMIENTO</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table align="center" width="1000">
<tr>
    <td align="center">
        <a href="categoria/todos_categoria.php" target="centro2">CATEGORIA</a>&nbsp;
    	<a href="ciudad/todos_ciudad.php" target="centro2">CIUDAD</a>&nbsp;
    	<a href="estado/todos_estados.php" target="centro2">ESTADOS</a>&nbsp;
    	<a href="super_usuario/todo_usuario.php" target="centro2">USUARIOS</a>
    </td>
</tr>
    <tr><td><hr color="#592E02" /></td></tr>
    <tr>
    	<td width="1000" valign="top">
    		<iframe align="middle" name="centro2" width="1000" height="500" scrolling="auto" frameborder="0"></iframe>
    	</td>
    </tr>
</table>
</body>
</html>
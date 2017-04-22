<?php
session_start();
$idusuario = $_SESSION["idusuario"];
$nombre_usuario = $_SESSION["nombre_usuario"];
$apellido_usuario = $_SESSION["apellido_usuario"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<body bgcolor="yellow">
<table align="center" border="0">
<tr>
	<td>Bienvenido</td>
</tr>
<tr>
	<td><? echo"$nombre_usuario"; ?></td>
</tr>

<tr>
    <td><a href="agregar_venta.php" target="centro1">Agregar Venta</a></td>
</tr>  
<tr>
    <td><a href="#" target="centro1">Agregar Servicios</a></td>
</tr> 
<tr>
    <td>
      <a href="#" target="centro1">Salir</a>
    </td>
</tr> 
</table>

</body>
</html>

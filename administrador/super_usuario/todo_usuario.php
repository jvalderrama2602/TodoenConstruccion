<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>

</head>
<body>
<?php
require_once('../../conexion/conexion.php');
?>


<table align="center" width="700">
	<tr><td colspan="5" align="center">USUARIOS</td></tr>
	<tr align="center">
    	<td width="69">CODIGO</td>
        <td width="204">NOMBRE</td>
        <td width="205">APELLIDO</td>
        <td width="116">SUSPENDIDO</td>
        <td width="82">ACCI&Oacute;N</td>
    </tr>

<?
	$sql2 = "SELECT idmantenimiento_usuario,nombre,apellido,suspendido FROM mantenimiento_usuario ";
	$result2 = $db->query($sql2);
	
while ($query_result = $result2->fetch_array())
{
	$id_usuario= $query_result['idmantenimiento_usuario'];
	$nombre= $query_result['nombre'];
	$apellido= $query_result['apellido'];
	$suspendido= $query_result['suspendido'];
	
	echo "<tr> \n";
	echo "<td>$id_usuario</td> \n";
	echo "<td>$nombre</td> \n";
	echo "<td>$apellido</td> \n";
	echo "<td>$suspendido</td> \n";
?>
	<td align="center">
    	<a href="modificar_usuarios.php?codigo=+<?=$id_usuario;?>" target="_blank" onClick="window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;"><img src="../imagenes/modificar.png" title='MODIFICAR USUARIO' width='20' class='linkboton'/></a>
    </td></tr>
<?
}
?>
</table>



</body>
</html>
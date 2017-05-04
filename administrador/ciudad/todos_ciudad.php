<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?
include_once('../../conexion/conexion.php');
	
	$sql2 = "SELECT idciudad,nombre_ciudad,estado_idestado,suspendido FROM ciudad";
	$result2 = $db->query($sql2);
?>

<table align="center" width="600px" border="1">
<tr>
	<td align="center" colspan="5">CIUDAD</td>
</tr>
<tr>
	<td width="68">CODIGO</td><td width="153">CIUDAD</td><td width="160">ESTADO</td><td width="105">SUSPENDIDO</td><td width="80">ACCION</td>
</tr>
<?	
while ($query_result = $result2->fetch_array())
{
	$idciudad= $query_result['idciudad'];
	$nombre_ciudad= $query_result['nombre_ciudad'];
	$estado_idestado= $query_result['estado_idestado'];
	$suspendido= $query_result['suspendido'];
	
	echo "<tr> \n";
	echo "<td>$idciudad</td> \n";
	echo "<td>$nombre_ciudad</td> \n";
		
		$sql60 = "SELECT nombre_estado FROM estado WHERE idestado='$estado_idestado' LIMIT 1";
		$result60 = $db->query($sql60);
		$fila60 = $result60 -> fetch_array();
	
	echo "<td>$fila60[nombre_estado]</td> \n";
	echo "<td>$suspendido</td> \n";
	
?>
	<td align="center">
    	<a href="modificar_usuarios.php?codigo=+<?=$idciudad;?>" target="_blank" onClick="window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;"><img src="../imagenes/modificar.png" title='MODIFICAR ESTADO' width='20' class='linkboton'/></a>
    </td></tr>
<?
}
?>
</table>

<table align="center">
	<tr><td><a href="agregar_ciudad.php">AGREGAR CIUDAD</a></td></tr>
</table>
</body>
</html>
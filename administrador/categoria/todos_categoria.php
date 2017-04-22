<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?
include_once('../../conexion/conexion.php');
	
	$sql2 = "SELECT idcategoria,nombre_categoria,suspendido_categoria FROM categoria";
	$result2 = $db->query($sql2);
?>

<table align="center" width="500px" border="1">
<tr>
	<td align="center" colspan="4">CATEGORIA</td>
</tr>
<tr>
	<td>CODIGO</td><td>NOMBRE</td><td>SUSPENDIDO</td><td>ACCION</td>
</tr>
<?	
while ($query_result = $result2->fetch_array())
{
	$idestado= $query_result['idcategoria'];
	$nombre_estado= $query_result['nombre_categoria'];
	$suspendido= $query_result['suspendido_categoria'];
	
	echo "<tr> \n";
	echo "<td>$idestado</td> \n";
	echo "<td>$nombre_estado</td> \n";
	echo "<td>$suspendido</td> \n";
	
?>
	<td align="center">
    	<a href="modificar_usuarios.php?codigo=+<?=$idestado;?>" target="_blank" onClick="window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;"><img src="../imagenes/modificar.png" title='MODIFICAR CATEGORIA' width='20' class='linkboton'/></a>
    </td></tr>
<?
}
?>
</table>

<table>
	<tr><td><a href="../categoria/agregar_categoria.php">AGREGAR CATEGORIA</a></td></tr>
</table>
</body>
</html>
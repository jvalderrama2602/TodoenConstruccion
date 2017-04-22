<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?
include_once('../../conexion/conexion.php');
	
	$sql2 = "SELECT idtipo_producto,tipo_producto,suspendido_tipo_producto,categoria_idcategoria FROM tipo_producto";
	$result2 = $db->query($sql2);
?>

<table align="center" width="600px" border="1">
<tr>
	<td align="center" colspan="5">TIPO DE PRODUCTO</td>
</tr>
<tr>
	<td width="93">CODIGO</td><td width="175">NOMBRE</td><td width="138">CATEGORIA</td><td width="98">SUSPENDIDO</td><td width="62">ACCION</td>
</tr>
<?	
while ($query_result = $result2->fetch_array())
{
	$idestado= $query_result['idtipo_producto'];
	$nombre_estado= $query_result['tipo_producto'];
	$suspendido= $query_result['suspendido_tipo_producto'];
	$idcategoria= $query_result['categoria_idcategoria'];
	
	echo "<tr> \n";
	echo "<td>$idestado</td> \n";
	echo "<td>$nombre_estado</td> \n";
	
	$sql60 = "SELECT nombre_categoria FROM categoria WHERE idcategoria='$idcategoria' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();
	
	echo "<td>$fila60[nombre_categoria]</td> \n";
	echo "<td>$suspendido</td> \n";
	
?>
	<td align="center">
    	<a href="modificar_usuarios.php?codigo=+<?=$idestado;?>" target="_blank" onClick="window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;"><img src="../imagenes/modificar.png" title='MODIFICAR TIPO DE PRODUCTO' width='20' class='linkboton'/></a>
    </td></tr>
<?
}
?>
</table>

<table>
	<tr><td><a href="../tipo_producto/agregar_tipo_producto.php">AGREGAR TIPO DE PRODUCTO</a></td></tr>
</table>
</body>
</html>
<?
require_once('conexion/conexion.php');	

$id_category = $_POST['id_category'];

	$sql2 = "SELECT idtipo_producto,tipo_producto FROM tipo_producto WHERE suspendido_tipo_producto='' && categoria_idcategoria='$id_category' ORDER BY tipo_producto ASC ";
	$result2 = $db->query($sql2);

while ($query_result = $result2->fetch_array())
					{
						$id_category= $query_result['idtipo_producto'];
						$nombre_estado= $query_result['tipo_producto'];
						?><option <? echo"value='$id_category'"; ?>><? echo"$nombre_estado"; ?></option><?
					}
echo $html;
?>
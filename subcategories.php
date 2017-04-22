<?
require_once('conexion/conexion.php');	

$id_category = $_POST['id_category'];

	$sql2 = "SELECT idciudad,nombre_ciudad FROM ciudad WHERE suspendido='' && estado_idestado='$id_category' ORDER BY nombre_ciudad ASC ";
	$result2 = $db->query($sql2);

while ($query_result = $result2->fetch_array())
					{
						$id_category= $query_result['idciudad'];
						$nombre_estado= $query_result['nombre_ciudad'];
						?><option <? echo"value='$id_category'"; ?>><? echo"$nombre_estado"; ?></option><?
					}
echo $html;
?>
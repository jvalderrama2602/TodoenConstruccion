<?
require_once('../../conexion/conexion.php');

$nombre=strtoupper($_GET['nombre']);
$categoria=$_GET['categoria'];

	$sql60 = "SELECT idtipo_producto FROM tipo_producto WHERE tipo_producto='$nombre' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idtipo_producto]!="")
	{  $id='';  }
	else
	{
		$query = "INSERT INTO tipo_producto (tipo_producto,suspendido_tipo_producto,categoria_idcategoria) VALUES('$nombre','','$categoria')";
		mysqli_query($db, $query);
	
		$id=mysqli_insert_id($db);
	}

echo $id;	
?>
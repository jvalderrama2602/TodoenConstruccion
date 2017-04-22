<?
require_once('../../conexion/conexion.php');

$nombre=strtoupper($_GET['usuario']);

	$sql60 = "SELECT idtipo_super_usuario FROM tipo_super_usuario WHERE tipo_nombre='$nombre' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idtipo_super_usuario]!="")
	{
		$id='';
	}
	else
	{
	$query = "INSERT INTO tipo_super_usuario (tipo_nombre,suspendido) VALUES('$nombre','')";
	mysqli_query($db, $query);
	
	$id=mysqli_insert_id($db);
	}

echo $id;	
?>
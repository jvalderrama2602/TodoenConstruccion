<?
session_start();
$tipo_usuario=$_SESSION["idtipo"];
$login=$_SESSION["login"];
$idusuario=$_SESSION["idusuario"];

require_once('../../conexion/conexion.php');

$nombre=strtoupper($_GET['usuario']);

	$sql60 = "SELECT idcategoria FROM categoria WHERE nombre_categoria='$nombre' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idcategoria]!="")
	{  $id='';  }
	else
	{
		$query = "INSERT INTO categoria (nombre_categoria,suspendido_categoria,mantenimiento_usuario_idmantenimiento_usuario,login_usuario) VALUES('$nombre','','$idusuario','$login')";
		mysqli_query($db, $query);
	
		$id=mysqli_insert_id($db);
	}

echo $id;	
?>
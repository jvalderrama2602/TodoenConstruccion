<?
session_start();
$tipo_usuario=$_SESSION["idtipo"];
$login=$_SESSION["login"];
$idusuario=$_SESSION["idusuario"];

require_once('../../conexion/conexion.php');

$nombre=strtoupper($_GET['usuario']);

	$sql60 = "SELECT idestado FROM estado WHERE nombre_estado='$nombre' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idestado]!="")
	{  $id='';  }
	else
	{
		$query = "INSERT INTO estado (nombre_estado,suspendido_estado) VALUES('$nombre','')";
		mysqli_query($db, $query);
	
		$id=mysqli_insert_id($db);
	}

echo $id;	
?>
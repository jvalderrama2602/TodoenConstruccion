<?
session_start();
$tipo_usuario=$_SESSION["idtipo"];
$login=$_SESSION["login"];
$idusuario=$_SESSION["idusuario"];

require_once('../../conexion/conexion.php');

$estado=$_GET['estado'];
$nombre=strtoupper($_GET['nombre']);

	$sql60 = "SELECT idciudad FROM ciudad WHERE nombre_ciudad='$nombre' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idciudad]!="")
	{  $id='';  }
	else
	{
		$query = "INSERT INTO ciudad (nombre_ciudad,estado_idestado,suspendido) VALUES('$nombre','$estado','')";
		mysqli_query($db, $query);
	
		$id=mysqli_insert_id($db);
	}

echo $id;	
?>
<?
require_once('../../conexion/conexion.php');
$tipo=$_GET['tipo'];
$nombre=strtoupper($_GET['nombre']);
$apellido=strtoupper($_GET['apellido']);
$email=strtolower($_GET['email']);
$login=strtoupper($_GET['login']);
$password=md5($_GET['pass']);
$fecha=date("Y-m-d");
	$query = "INSERT INTO mantenimiento_usuario (nombre,apellido,login,pass,email,fecha_ingreso,suspendido,tipo_super_usuario_idtipo_super_usuario) VALUES ('$nombre','$apellido','$login','$password','$email','$fecha','','$tipo')";
	mysqli_query($db, $query);
	$id=mysqli_insert_id($db);
echo $id;
?>
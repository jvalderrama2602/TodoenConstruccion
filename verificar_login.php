<?
require_once('conexion/conexion.php');

$login=$_GET['login'];


	$sql60 = "SELECT idusuario FROM usuario WHERE login_usuario='$login' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();
	
	$id=trim($fila60[idusuario]);
	
	if($id==""){$id=no;}
		
echo $id;	
?>
<?
session_start();
require_once('conexion/conexion.php');

$login=strtoupper($_GET['login']);
$password=md5($_GET['password']);

	$sql60 = "SELECT idusuario,clave_usuario,nombre_usuario,apellido_usuario FROM usuario WHERE login_usuario='$login' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idusuario]=="")
	{
		$id=no_existe;
	}
	else
	{
		if($fila60[clave_usuario]==$password)
		{
			$id = $fila60[idusuario]; 

			$_SESSION["idusuario"] = $fila60[idusuario];
			$_SESSION["nombre_usuario"] = $fila60[nombre_usuario];
			$_SESSION["apellido_usuario"] = $fila60[apellido_usuario];
		}
		else{$id=clave_invalida;}
	}
	
echo $id;	
?>
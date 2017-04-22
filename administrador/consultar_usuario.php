<?
session_start();
require_once('../conexion/conexion.php');

$login=strtoupper($_GET['login']);
$password=md5($_GET['password']);

	$sql60 = "SELECT idmantenimiento_usuario,pass,tipo_super_usuario_idtipo_super_usuario,login FROM mantenimiento_usuario WHERE login='$login' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

	if($fila60[idmantenimiento_usuario]=="")
	{
		$id=no_existe;
	}
	else
	{
		if($fila60[pass]==$password)
		{
			$id=$fila60[idmantenimiento_usuario];
			
			$_SESSION["idtipo"] = $fila60[tipo_super_usuario_idtipo_super_usuario];
			$_SESSION["login"] = $fila60[login];
			$_SESSION["idusuario"] = $fila60[idmantenimiento_usuario];
			
		}
		else{$id=clave_invalida;}
	}
echo $id;	
?>
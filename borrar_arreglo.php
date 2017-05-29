<?
session_start();

$json = array();
$json['msj'] = 'Producto Eliminado';
$json['success'] = true;
	
		
unset($_SESSION['detalle'][$_POST['id']]);	

echo json_encode($json);

?>
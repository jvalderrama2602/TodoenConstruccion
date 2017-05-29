<?php
session_start();

$tipo_negocio=$_POST['tipo_negocio'];
$producto=$_POST['producto'];
$nombre_producto=$_POST['nombre_producto'];
$monto_producto=$_POST['monto_producto'];
$cantidad=$_POST['cantidad'];
$subtotal=$_POST['subtotal'];

$json = array();
$json['msj'] = 'Producto Agregado';
$json['success'] = true;

if(count($_SESSION['detalle'])>0)
{
	$ultimo = end($_SESSION['detalle']);
	$count = $ultimo['id']+1;
}
else
{
	$count = count($_SESSION['detalle'])+1;
}

$_SESSION['detalle'][$count] = array('id'=>$count, 'tipo_negocio'=>$tipo_negocio, 'producto'=>$producto, 'nombre_producto'=>$nombre_producto,  'monto_producto'=>$monto_producto,  'cantidad'=>$cantidad,  'subtotal'=>$subtotal);

echo json_encode($json);

?>
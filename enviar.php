<?
require_once('conexion/conexion.php');

$pregunta = $_POST['pre'];
$idproducto = $_POST['idproducto'];
$fecha=date('Y-m-d');

	$query = "INSERT INTO preguntas_producto (fecha_preguntas_producto,producto_idproducto,pregunta_producto,respuesta_producto) VALUES('$fecha','$idproducto','$pregunta','')";
	mysqli_query($db, $query);

	$id=mysqli_insert_id($db);



echo $id;
?>
<?
require_once('conexion/conexion.php');

$respuesta = $_POST['res'];
$idproducto = $_POST['idproducto'];

	$query = "UPDATE preguntas_producto SET respuesta_producto='$respuesta' WHERE idpreguntas_producto='$idproducto' LIMIT 1 ";
	// or die(mysqli_error());

	if(mysqli_query($db, $query))
	{
		$id=si;
	}
	else
	{
		$id=no;
	}

echo $id;
?>
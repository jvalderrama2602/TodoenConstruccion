<? 
session_start();
$idusuario = $_SESSION["idusuario"];
$nombre_usuario = $_SESSION["nombre_usuario"];
$apellido_usuario = $_SESSION["apellido_usuario"];
$carrito = $_SESSION["carrito"];

require_once('conexion/conexion.php');
 
$fecha = date("Y-m-d");

echo $fecha."<br>".$idusuario."<br>";


	$query = "INSERT INTO carrito (fecha_carrito,usuario_idusuario) VALUES('$fecha','$idusuario')";
	mysqli_query($db, $query) or die(mysqli_error($db));

$idcarrito = mysqli_insert_id($db);


foreach($_SESSION['detalle'] as $k => $detalle)
{ 
	$tipo_negocio=$detalle['tipo_negocio'];
	$idproducto=trim($detalle['producto']);
	$nombre_producto=$detalle['nombre_producto'];
	$cantidad=$detalle['cantidad'];
	
	// buscar el id del usuario y cantidad de producto				           
	$consulta = "SELECT usuario_idusuario,cantidad_producto FROM producto WHERE idproducto='$idproducto' LIMIT 1";
	$resultado = $db->query($consulta);
	$fila = $resultado -> fetch_array();
	
	// si es venta .... entra a restar o eliminar producto
	if($tipo_negocio=='VENTA')
	{
		//restar cantidad
		$nueva_cantidad=$fila[cantidad_producto]-$cantidad;
		echo $nueva_cantidad;
		
		if($nueva_cantidad<=0)
		{
		// eliminamos el producto
		}
		else
		{
			$query10 = "Update producto Set cantidad_producto='$nueva_cantidad' WHERE idproducto='$idproducto'";
			mysqli_query($db, $query10) or die(mysqli_error($db));
		}
	}
	
	
	// grabar detalle
	$query2 = "INSERT INTO carrito_detalles (carrito_idcarrito,tipo,id_venta,nombre,cantidad,usuario_idusuario) VALUES ('$idcarrito','$tipo_negocio','$idproducto','$nombre_producto','$cantidad','$fila[usuario_idusuario]')";
	mysqli_query($db, $query2) or die(mysqli_error($db));
	
	
	
	// buscar datos del vendedor
	$consulta2 = "SELECT nombre_usuario,apellido_usuario,celular_usuario,loca_usuario,email_usuario,ventas_concretadas FROM usuario WHERE idusuario='$fila[usuario_idusuario]' LIMIT 1";
	$resultado2 = $db->query($consulta2);
	$fila2 = $resultado2 -> fetch_array();
	
	$suma_con=$fila2[ventas_concretadas]+1;
	
	// actualizar ventas concretadas
	$query100 = "Update usuario Set ventas_concretadas='$suma_con' WHERE idusuario='$fila[usuario_idusuario]'";
	mysqli_query($db, $query100);
	
	// enviar correo
	
    $destinatario = $fila2[email_usuario]; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' Hola '.$fila2[nombre_usuario];
	
	//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Notificacion <notificacion@todoenconstruccion.com.ve>\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: notificacion@todoenconstruccion.com.ve\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

}
?>







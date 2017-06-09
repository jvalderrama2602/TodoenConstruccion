<?
session_start();
$idusuario = $_SESSION["idusuario"];
$nombre_usuario = $_SESSION["nombre_usuario"];
$apellido_usuario = $_SESSION["apellido_usuario"];

require_once('conexion/conexion.php');

$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$monto=$_POST['monto'];
$cantidad=$_POST['cantidad'];

$condicion=$_POST['condicion'];
$foto=$_POST['file'];

$hoy = date("Y-m-d");

// $numUploadedfileses la cantidad de fotos que hay subidas
$numUploadedfiles = count($_FILES['file']['name']);

if($numUploadedfiles>8){$numUploadedfiles=8;}

$query2 = "INSERT INTO producto (usuario_idusuario,fecha_ingreso,nombre_producto,descripcion_producto,categoria_idcategoria,monto_producto,cantidad_producto,condicion_producto,tipo_producto_idtipo_producto,puntuacion,cant_fotos) VALUES ('$idusuario','$hoy','$nombre','$descripcion','$category','$monto','$cantidad','$condicion','$subcategory','','$numUploadedfiles')";
mysqli_query($db, $query2) or die(mysqli_error($db));

$id=mysqli_insert_id($db);


// crear carpeta si no existe  ... $id es el id del producto agregado
$carpetaDestino = 'fotos/'.$idusuario.'/producto/'.$id.'/';
if (!file_exists($carpetaDestino)) { mkdir($carpetaDestino, 0777, true);}

# si hay algun archivo que subir
if($_FILES["file"]["name"][0])
{
	# recorremos todos los arhivos que se han subido
	for($i=0;$i<$numUploadedfiles;$i++)
	{
		# si es un formato de imagen
		if($_FILES["file"]["type"][$i]=="image/jpeg" || $_FILES["file"]["type"][$i]=="image/pjpeg" || $_FILES["file"]["type"][$i]=="image/gif" || $_FILES["file"]["type"][$i]=="image/png")
		{
			$origen=$_FILES["file"]["tmp_name"][$i];
			$destino=$carpetaDestino.$_FILES["file"]["name"][$i];

 			# movemos el archivo
			@move_uploaded_file($origen, $destino);
			
				
				if($i==0){$index1=1;}else{$index1='';}
				
				$tipo_imagen=$_FILES["file"]["type"][$i];
				
				
				// grabar compra
				$query = "INSERT INTO fotos_productos (producto_idproducto,tipo_imagen,index1,index2,ruta_fotos) VALUES ('$id','$tipo_imagen','$index1','','$destino')";
				mysqli_query($db, $query) or die(mysqli_error($db));
				
         }

	}

}
?>
<script>
	history.back(-1);
</script>
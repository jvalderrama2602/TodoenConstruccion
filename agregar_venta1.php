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


$permitidos = array("image/jpg", "image/jpeg");
//$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$limite_kb = 16384; //16mb es el limite de medium blob

$numUploadedfiles = count($_FILES['file']['name']);

if($numUploadedfiles>8){$numUploadedfiles=8;}

for($i = 0; $i < $numUploadedfiles; $i++)
{
		
	if (in_array($_FILES['file']['type'][$i], $permitidos) && $_FILES['file']['size'][$i] <= $limite_kb * 1024)
		{
			//este es el tipo de archivo
			$foto_type = $_FILES['file']['type'][$i];
			
			if ($foto_type=="image/x-png" OR $foto_type=="image/png"){$extension="image/png";$tipo_img=1;}
			if ($foto_type=="image/pjpeg" OR $foto_type=="image/jpeg"){$extension="image/jpeg";$tipo_img=2;}
			if ($foto_type=="image/gif" OR $foto_type=="image/gif"){$extension="image/gif";$tipo_img=3;}
			
			//este es el archivo temporal
			$imagen_temporal  = $_FILES['file']['tmp_name'][$i];  
			
			//tamano imagen
			$img_origen=imagecreatefromjpeg($imagen_temporal);
			$ancho_origen=imagesx($img_origen);
			$alto_origen=imagesy($img_origen);
			$ancho_limite=400;

			
			if($ancho_origen>$alto_origen)
			{	
				$ancho_origen=$ancho_limite;
				$alto_origen=$ancho_limite*imagesy($img_origen)/imagesx($img_origen);
			}
			else
			{
				$alto_origen=$ancho_limite;
				$ancho_origen=$ancho_limite*imagesx($img_origen)/imagesy($img_origen);
			}
	
			$img_destino=imagecreatetruecolor($ancho_origen,$alto_origen);
			imagecopyresized($img_destino,$img_origen,0,0,0,0,$ancho_origen,$alto_origen,imagesx($img_origen),imagesy($img_origen));
			
			if($tipo_img==1){imagepng($img_destino,$imagen_temporal);}
			if($tipo_img==2){imagejpeg($img_destino,$imagen_temporal);}
			if($tipo_img==3){imagegif($img_destino,$imagen_temporal);}
			
			//leer el archivo temporal en binario
			$fp   = fopen($imagen_temporal, 'r+b');
			$foto = fread($fp, filesize($imagen_temporal));
			fclose($fp);
			
			//escapar los caracteres
			$foto = mysqli_escape_string($db,$foto);
			
			if($i==0){$index1=1;}else{$index1='';}
			
			// grabar compra
			$query = "INSERT INTO fotos_productos (producto_idproducto,fotos_producto,tipo_imagen,index1,index2) VALUES ('$id','$foto','$extension','$index1','')";
			mysqli_query($db, $query) or die(mysqli_error($db));
	
	
		}
	
	
	
}
?>
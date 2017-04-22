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

$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$limite_kb = 16384; //16mb es el limite de medium blob

/* foreach ($_FILES['file']['name'] as $file) 
{
  echo '<li>' . $file . '</li>';
}
*/
$numUploadedfiles = count($_FILES['file']['name']);

for($i = 0; $i < $numUploadedfiles; $i++)
{
	
	$archivo = $_FILES['file']['name'][$i];
	echo"<br>".$archivo;
	
	
	$imagen = explode('.',$archivo);
	$nuevo=$imagen[0].'.jpg';
	echo"<br>".$nuevo;
}
?>
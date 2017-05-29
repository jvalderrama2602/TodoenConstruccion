<?
require_once('conexion/conexion.php');

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$nac=$_GET['nac'];
$ci=$_GET['ci'];
$tel_cel=$_GET['tel_cel'];
$tel_loc=$_GET['tel_loc'];
$idestado=$_GET['idestado'];
$idciudad=$_GET['idciudad'];
$email=$_GET['email'];
$login=$_GET['login'];
$pass=md5($_GET['pass']);

$query = "INSERT INTO usuario (nombre_usuario,apellido_usuario,nac_usuario,ci_usuario,celular_usuario,loca_usuario,email_usuario,login_usuario,clave_usuario,clasificacion_positiva,clasificacion_negativa,ventas_concretadas,ciudad_idciudad,estado_idestado,suspendido_usuario) VALUES('$nombre','$apellido','$nac','$ci','$tel_cel','$tel_loc','$email','$login','$pass','','','','$idciudad','$idestado','')";
		mysqli_query($db, $query);

		$id=mysqli_insert_id($db);
echo $id;
//CODIGO PARA ENVIAR CORREO//
$para=$email;
$titulo="Bienvenido a Todo Construcción";
$mensaje="Hola ". $nombre;
$cabecera='From: servicios@gendigital.com.ve'."\r\n".
'Reply-To: servicios@gendigital.com.ve' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($para,$titulo,$mensaje,$cabecera);

?>
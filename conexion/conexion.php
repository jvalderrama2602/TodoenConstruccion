<?php
	$host='localhost:3306';
	$userid='todoenco';
	$password='+VU_V+X8~loL';
	$basedatos="todoenco_construccion";
	
	$db = new mysqli($host, $userid, $password, $basedatos);

if($db->connect_errno > 0)
{
    die('Imposible conectarse con la base de datos: [' . $db->connect_error . ']');
}
?>

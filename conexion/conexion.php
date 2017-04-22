<?php
	$host='localhost:3306';
	$userid='todoenco';
	$password='d63u7wdX8N';
	$basedatos="todoenco_construccion";
	
	$db = new mysqli($host, $userid, $password, $basedatos);

if($db->connect_errno > 0)
{
    die('Imposible conectarse con la base de datos: [' . $db->connect_error . ']');
}
?>

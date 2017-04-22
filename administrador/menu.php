<?php
session_start();
$idtipo=$_SESSION["idtipo"];
$login=$_SESSION["login"];
?>
<html>
<head>
<title>MENU</title>

</head>

<body bgcolor= yellow>

<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td><? echo $login; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>
    	<a href="menu_mantenimiento.php" target="centro1" style="text-decoration:none; color: black">Mantenimiento&nbsp;&nbsp;</a>
    </td>  
	<td>
    	<a href="logout.php" target="_parent" style="text-decoration:none; color: black">Salir</a>
    </td>
</tr>  
</table>
</body>
</html>
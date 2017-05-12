<?    
include('header.php');
require_once('conexion/conexion.php');

$sql2 = "SELECT idcategoria,nombre_categoria FROM categoria WHERE suspendido_categoria='' ORDER BY nombre_categoria ASC ";
$result2 = $db->query($sql2);
?>

<script language="javascript">
$(document).ready(function(){
   $("#category").change(function () {
           $("#category option:selected").each(function () {
            id_category = $(this).val();
            $.post("tipo_producto_sub.php", { id_category: id_category }, function(data){
                $("#subcategory").html(data);
            });            
        });
   })
});
</script>

<script>
function enviar()
{
	var categororia = document.getElementById("category").value;
	var tipo_producto = document.getElementById("subcategory").value;
	var nombre = document.getElementById("nombre").value;
	var descripcion = document.getElementById("descripcion").value;
	var monto = document.getElementById("monto").value;
	var cantidad = document.getElementById("cantidad").value;
	
	if(categororia=="" || tipo_producto==0 || nombre=="" || descripcion=="" || monto=="" || cantidad=="")
	{ alert('Complete Todos Los Campos')}
	else
	{
			
		document.forms["formulario"].submit();
		
	}
}
</script>





<form method="post" name="formulario" enctype="multipart/form-data" action="agregar_venta1.php">

Categoria
<select name="category" id="category" >
	<option></option>
<?
while ($query_result = $result2->fetch_array())
{
	$id_category= $query_result['idcategoria'];
	$nombre_estado= $query_result['nombre_categoria'];
	?><option <? echo"value='$id_category'"; ?>><? echo"$nombre_estado"; ?></option><?
}
?>
</select>
<br>			

Producto			
<select name="subcategory" id="subcategory" >
			
</select>
<br>
	
Nombre
<input type="text" name="nombre" id="nombre" size="40" maxlength="45" placeholder=" Nombre del Producto"  >
<br>

Descripcion
<input type="text" name="descripcion" id="descripcion" size="40" maxlength="65" placeholder=" Descripcion del Producto"  >
<br>

Monto
<input type="text" name="monto" id="monto" size="40" maxlength="20" placeholder=" Monto del Producto"  >
<br>

Cantidad
<input type="text" name="cantidad" id="cantidad" size="40" maxlength="6" placeholder=" Cantidad del Producto"  >
<br>

Condicion
<input type="radio" name="condicion" value="NUEVO"  >Nuevo
<input type="radio" name="condicion" value="USADO"  >Usado
<br>

Subir imagen: <input type="file" id="file" name="file[]" accept="image/*" multiple>
*Solo formato JPG.<br>
*Maximo 8 fotos.
	<br>
	<button onClick="enviar()">Grabar</button>
	
</form>
<div id="vista-previa"></div>
</body>
</html>

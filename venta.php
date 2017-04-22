<?

include('header.php');

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

<div id='filtos'>
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

</div>

<div id='mostrar'>
	
</div>
<?
include('footer.php');
?>
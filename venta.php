<?

include('header.php');


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

<script language="javascript">
$(document).ready(function(){
   $("#estado").change(function () {
           $("#estado option:selected").each(function () {
            id_category = $(this).val();
            $.post("subcategories.php", { id_category: id_category }, function(data){
                $("#ciudad").html(data);
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
		$sql2 = "SELECT idcategoria,nombre_categoria FROM categoria WHERE suspendido_categoria='' ORDER BY nombre_categoria ASC ";
$result2 = $db->query($sql2);
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

	Estado
		<select name="estado" id="estado">
				<?
					$sql2 = "SELECT idestado,nombre_estado FROM estado WHERE suspendido_estado='' ORDER BY nombre_estado ASC ";
					$result2 = $db->query($sql2);
					
					while ($query_result = $result2->fetch_array())
					{
						$idestado= $query_result['idestado'];
						$nombre_estado= $query_result['nombre_estado'];
						?><option <? echo"value='$idestado'"; ?>><? echo"$nombre_estado"; ?></option><?
					}
				?>
	</select>




	Ciudad
	<select name="ciudad" id="ciudad">
					
	</select>
	
	Condicion:
	<input type="radio" name="condicion" value="NUEVO">NUEVO
	<input type="radio" name="condicion" value="USADO">USADO
</div>

<div id='mostrar'>
<center>
	<?
			$sql2 = "SELECT idfotos_productos,fotos_producto FROM fotos_productos";
			$result2 = $db->query($sql2);

			while ($query_result = $result2->fetch_array())
			{
				$idusuarios= $query_result['idfotos_productos'];
				$imagen_servicio= $query_result['fotos_producto'];
		?>
    			<img src="data:image/jpg; base64 ,<? echo base64_encode($imagen_servicio); ?>" />
		<?
			}
		?>
<center>
</div>
<?
include('footer.php');
?>
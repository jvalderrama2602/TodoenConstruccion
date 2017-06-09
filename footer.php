<footer>

	

</footer>

<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		
	
	
	<script>
$("#Anadir").on("click", function(e) {
	
	var idusuario = $("#idusuario").val();
	
	if(idusuario!="")
	{
	
	var tipo_negocio ='venta';
	var producto = $("#idproducto").val();
	var nombre_producto = $("#nombre_producto").val();
	var monto_producto = $("#monto_producto").val();
	var cantidad = $("#cant").val();
	var subtotal = cantidad*monto_producto;
	
	$.ajax({
    data: {'tipo_negocio':tipo_negocio, 'producto':producto,  'nombre_producto':nombre_producto, 'monto_producto':monto_producto,  'cantidad':cantidad,  'subtotal':subtotal},
    type: "POST",
    dataType: "json",
    url: "arreglo.php",
	})
 	.done(function( data) 
	 {
		if(data.success==true)
		{
				alert(data.msj);
				$("#tabla").load('detalle.php');
				$("#actualizar_numer").load(location.href + " #actualizar_numer");
		}
     
 	})
 
	} 
	else
	{
		alert('tiene que ser usuario');
	}   
});
		
</script>
	
	
<script>
$(".eliminar-producto").on("click", function() 
{
	var id = $(this).attr("id");

	$.ajax({
		url: 'borrar_arreglo.php',
		type: 'post',
		data: {'id':id},
		dataType: 'json'
		}).done(function( data) 
	 {
		if(data.success==true)
		{
				alert(data.msj);
		
				$("#tabla_1").load(location.href + " #tabla_1");
				$("#actualizar_numer").load(location.href + " #actualizar_numer");
		}
     
 	})
});
</script>
	
	
</body>

</html>
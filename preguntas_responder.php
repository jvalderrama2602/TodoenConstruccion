<?    
include('header.php');
?>


<div class="modal fade" id="myModalDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Tipo de Usuario</h4>
			</div>
			
			<div class="modal-body">
				<div id="x1" class="alert alert-danger" style="display: none">
					El Tipo de Usuario <strong>Ya Existe</strong>
				</div>
				<div id="x2" class="alert alert-success" style="display: none">
					El Tipo de Usuario Se A Registrado Correctamente 
				</div>
				<div id="x3" class="alert alert-warning" style="display: none">
					El Campo Nombre Se Encuentra Vacio
				</div>

				
				<form id="contactForm" role="form" name="formulario_tipo_usuario">
   				
   				<div>
					<h6>Los Datos Son Obligatorios <span style="color:#a94442">*</span></h6>
				</div>
				
				<input type="text" name="DNI" id="DNI" value=""/>
   			
	   			<div class="form-group">
	      			<label for="name" class="control-label">
	      				Respuesta<span style="color:#a94442"> *</span>
	      			</label>
	      			<input type="text" name="respuesta" id="respuesta" class="form-control" placeholder="Introduzca Respuesta" maxlength="500" >
	   			</div>
	   			
	     		<a class="btn btn-primary" id="grabar">Grabar</a>
	     		
				</form>
			</div>
		</div>
	</div>
</div>



<div class="container">

	<div>
		<h5>PRODUCTOS</h5>
		<?
		$sql3 = "SELECT tb1.nombre_producto, tb2.idpreguntas_producto, tb2.pregunta_producto FROM producto AS tb1 INNER JOIN preguntas_producto AS tb2 ON tb2.producto_idproducto = tb1.idproducto AND tb2.respuesta_producto='' AND tb1.usuario_idusuario=$idusuario";
		$result3 = $db->query($sql3);

		while ($query_result3 = $result3->fetch_array())
		{
		?>	
		<strong>producto:</strong> <? echo"$query_result3[nombre_producto]"; ?>, <strong>pregunta: </strong><? echo"$query_result3[pregunta_producto]"; ?>  <a data-toggle="modal" data-id="<? echo"$query_result3[idpreguntas_producto]"; ?>" title="Add this item" class="open-Modal btn btn-primary" href="#myModalDialog">test</a>
		<br>
		<?
		}
		?>
	</div>
</div>

<script>
	$(document).on("click", ".open-Modal", function () {
		var myDNI = $(this).data('id');
		$(".modal-body #DNI").val( myDNI );
	});
</script>
	

<script>
function validaForm()
{
	if($("#respuesta").val() == "")
	{
        alert("El campo donde colocas la RESPUESTA no puede estar vacío.");
        $("#respuesta").focus(); 
        return false;
    }

    return true;
}
</script>
	
		
			
<script>
$(document).ready( function() {  	
	$("#grabar").click( function() { 
		if(validaForm()){
		
			$.post("grabar_respuesta_producto.php",{res:$("#respuesta").val(),idproducto:$("#DNI").val()},function(res){
     			if(res != "")
				{
				   
					alert(res);
					//	document.getElementById('x2').style.display = '' ;
			//	   	$("#mydiv").load(location.href + " #mydiv");


            //        $("#x2").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } 
				else 
				{
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
			
		}
	});
});
</script>	
<? include('footer.php'); ?>
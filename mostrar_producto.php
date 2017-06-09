<? include('header.php'); 

$idproducto=$_GET['idproducto'];


	$consulta = "SELECT fecha_ingreso,nombre_producto,descripcion_producto,categoria_idcategoria,monto_producto,cantidad_producto,condicion_producto,tipo_producto_idtipo_producto,puntuacion,cant_fotos FROM producto WHERE idproducto='$idproducto' LIMIT 1";
	$resultado = $db->query($consulta);
	$fila = $resultado -> fetch_array();

?>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 500,
								thumb_image_height: 500,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
				

<div class="content">
	<div class="col-md-12">
		<div class="col-md-6">	
							<!-- start product_slider -->
				     <ul id="etalage">
				     
				     	<?
						$sql2 = "SELECT idfotos_productos,ruta_fotos FROM fotos_productos WHERE producto_idproducto=$idproducto LIMIT $fila[cant_fotos] ";
						$result2 = $db->query($sql2);

						while ($query_result = $result2->fetch_array())
						{
							$idusuarios= $query_result['idfotos_productos'];
							$imagen_servicio= $query_result['ruta_fotos'];
						?>
    						
    						<li>
						<!--		<a href="optionallink.html">  -->
									<img class="etalage_thumb_image" src="<? echo $imagen_servicio ; ?>"/>
									<img class="etalage_source_image" src="<? echo $imagen_servicio ; ?>"/>
								</a>
							</li>
						<?
						}
						?>
					
						</ul>
					
					
			<!-- end product_slider -->
	
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>				
  

      			 <script type="text/javascript">
					$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
			</script>

		</div>	
					
		<div class="col-md-6">
			<div>
				<h4><? echo"$fila[nombre_producto]"; ?></h4>
				<div>
					<span>Monto Bs. <? echo"$fila[monto_producto]"; ?></span>					
					<div class="clearfix"></div>
				</div>
				
				<div>
					<h5>Existencia: <? echo"$fila[cantidad_producto]"; ?> en stock</h5>
					Cantidad a solicitar
					<input type="text" name="cant" id="cant" value="1">
				</div>
				
				<div>
					<h5>Condicion: <? echo"$fila[condicion_producto]"; ?></h5>
					<a class="btn btn-primary" id="Anadir">Anadir al camion</a>
				</div>
				<br>
				<div>
					<ul class="nav nav-tabs">
  						<li class="active">
  							<a href="#detalles" data-toggle='tab'>Descripcion</a>
  						</li>
  						<li>
  							<a href="#det" data-toggle='tab'>Detalles</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="detalles">
							<? echo"$fila[descripcion_producto]"; ?>
						</div>
						<div class="tab-pane fade" id="det">
							<? echo"$carro"; ?>
						</div>
					</div>
			</div>
			
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>	

	<div class="col-md-12">
		<div>
			<h5>Preguntas al vendedor</h5>
			<input type="text" name="pregunta" id="pregunta" maxlength="500" />
			<a class="btn btn-primary" id="grabar">Grabar</a>
				<div id="x2" class="alert alert-success" style="display: none">
					La Pregunta se <strong>A Registrado Correctamente</strong> 
				</div>
		</div>
		<hr></hr>
		
		      
		 <div id="mydiv">
		<?
			$sql3 = "SELECT idpreguntas_producto,fecha_preguntas_producto,pregunta_producto,respuesta_producto FROM preguntas_producto WHERE producto_idproducto=$idproducto ORDER BY idpreguntas_producto DESC";
			$result3 = $db->query($sql3);

			while ($query_result3 = $result3->fetch_array())
			{
				$idpreguntas_producto=$query_result3['idpreguntas_producto'];
				$fecha_preguntas_producto=$query_result3['fecha_preguntas_producto'];
				$pregunta_producto=$query_result3['pregunta_producto'];
				$respuesta_producto=$query_result3['respuesta_producto'];
			
				$cambio=explode('-',$fecha_preguntas_producto);
				$fecha=$cambio[2].'-'.$cambio[1].'-'.$cambio[0];
		
				echo "
						<div class='alert alert-info' >
							<strong>$fecha</strong>, $pregunta_producto
						</div>
					  ";
				if($respuesta_producto!="")
				{
					echo "	
							<div class='alert alert-warning' >
								$respuesta_producto
							</div>
					";	
				}
				
				echo"<hr style='border: 1px dashed black;'></hr>";
			}
		?>
		</div>     
	</div>

	
</div>



<script>
$(document).ready(function() {
	$("#tabla").load('detalle.php');
});
</script>

<script>
function validaForm()
{
	if($("#pregunta").val() == "")
	{
        alert("El campo donde colocas la PREGUNTA no puede estar vacío.");
        $("#pregunta").focus(); 
        return false;
    }

    return true; 
}
</script>


<script>
$(document).ready( function() {  
    $("#grabar").click( function() {   
        if(validaForm()){
			
            $.post("enviar.php",{pre:$("#pregunta").val(),idproducto:<? echo $idproducto; ?>},function(res){
     			if(res != "")
				{
				   	$("#mydiv").load(location.href + " #mydiv");
                } 
				
            });
        }
    });    
});
</script>	

<input type="hidden" name="idusuario" id="idusuario" <? echo"value='$idusuario'"; ?> />

<input type="hidden" name="nombre_producto" id="nombre_producto" <? echo"value='$fila[nombre_producto]'"; ?> />
<input type="hidden" name="monto_producto" id="monto_producto" <? echo"value='$fila[monto_producto]'"; ?> />
<input type="hidden" name="idproducto" id="idproducto" <? echo"value='$idproducto'"; ?> />


	
<? include('footer.php'); ?>
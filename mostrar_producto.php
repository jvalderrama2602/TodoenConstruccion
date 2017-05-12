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
								thumb_image_width: 400,
								thumb_image_height: 400,
								
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
	<div class="col-md-9">
		<div class="col-md-6">	
							<!-- start product_slider -->
				     <ul id="etalage">
				     
				     	<?
						$sql2 = "SELECT idfotos_productos,fotos_producto FROM fotos_productos WHERE producto_idproducto=$idproducto LIMIT $fila[cant_fotos] ";
						$result2 = $db->query($sql2);

						while ($query_result = $result2->fetch_array())
						{
							$idusuarios= $query_result['idfotos_productos'];
							$imagen_servicio= $query_result['fotos_producto'];
						?>
    						
    						<li>
						<!--		<a href="optionallink.html">  -->
									<img class="etalage_thumb_image" src="data:image/jpg; base64 ,<? echo base64_encode($imagen_servicio); ?>"/>
									<img class="etalage_source_image" src="data:image/jpg; base64 ,<? echo base64_encode($imagen_servicio); ?>"/>
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
				<h5>Existencia: <? echo"$fila[cantidad_producto]"; ?> en stock</h5>
				<div>
					<h5>Condicion: <? echo"$fila[condicion_producto]"; ?></h5>
					<a href="#">Anadir al Camion</a>
				</div>
				<a href="#">Mas Detalles</a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<div class="col-md-3 col-md">
			<div class=" possible-about">
					<h4>Anadir al carro</h4>
						
						
						
						
					</div>
				<!---->
			</div>
			<div class="clearfix"> </div>
		</div>
<? include('footer.php'); ?>
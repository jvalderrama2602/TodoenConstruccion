<?

include('header.php');

?>
<div class="slider-wrapper theme-default" >

<div id="slider" class="nivoSlider">     

    <img src="Nivo-Slider-jQuery-master/demo/images/nemo.jpg" alt="" />    

    <a href="http://dev7studios.com"><img src="Nivo-Slider-jQuery-master/demo/images/toystory.jpg" alt="" title="#htmlcaption" /></a>     

    <img src="Nivo-Slider-jQuery-master/demo/images/up.jpg" alt="" title="This is an example of a caption" />     

    <img src="Nivo-Slider-jQuery-master/demo/images/walle.jpg" alt="" /> 

</div> 

<div id="htmlcaption" class="nivo-html-caption">     

    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 

</div>

</div>



<div id="compra_venta" >
	
	<div id='venta' onClick="window.location ='venta10.php'">
	<center>
		<h3>Venta</h3>
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
		</center>
	</div>
	
	<div id='servicios'>
		<h3>Servicios</h3>
	</div>

</div>

<?
include('footer.php');
?>
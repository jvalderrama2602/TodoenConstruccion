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
			$sql2 = "SELECT idfotos_productos,ruta_fotos FROM fotos_productos WHERE index1=1 limit 3";
			$result2 = $db->query($sql2);

			while ($query_result = $result2->fetch_array())
			{
				$idusuarios= $query_result['idfotos_productos'];
				$ruta_fotos= $query_result['ruta_fotos'];
		?>
    			<img src="<? echo $ruta_fotos ; ?>" width="100" height="100" />
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
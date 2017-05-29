<?php 
@session_start();
?>
<?php 
if(count($_SESSION['detalle'])>0)
{?>
	<table class="table">
	    <thead>
	        <tr>
	            <th>Descripci&oacute;n</th>
	            <th>Cantidad</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	foreach($_SESSION['detalle'] as $k => $detalle){ 
	    	?>
	        <tr>
	        	<td><?php echo $detalle['nombre_producto'];?></td>
	            <td><?php echo $detalle['cantidad'];?></td>
	        </tr>
	        <?php }?>
	    </tbody>
	</table>
<?php }?>



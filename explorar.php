<? include('header.php'); ?>



 	<div class="container">
 		
 		<div class="page-header">
			<h1>Cami&oacute;n de Compras</h1>
		</div>
		
		<br>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title">Pedido</h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table id="tabla_1" class="table">
					    <thead>
					        <tr>
				            	<th>Tipo</th>
					            <th>Nombre</th>
					            <th>Precio</th>
					            <th>Cantidad</th>
					            <th>Subtotal</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['tipo_negocio'];?></td>
				            	<td><?php echo $detalle['nombre_producto'];?></td>
					            <td><?php echo $detalle['monto_producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"> No hay productos agregados</div>
				<?php }?>
			</div>
		</div>
 	</div>
	
	



<? include('footer.php'); ?>
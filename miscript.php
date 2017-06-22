<?php
require_once('conexion/conexion.php');

$categoria=$_POST['variable'];
$subcategory=$_POST['subcategory'];
$condicion=$_POST['condicion'];

if($categoria!='' && $subcategory=='' && $condicion==''){ $where="WHERE categoria_idcategoria='$categoria'";}
if($categoria!='' && $subcategory!='' && $condicion==''){ $where="WHERE categoria_idcategoria='$categoria' && tipo_producto_idtipo_producto='$subcategory'";}
if($categoria!='' && $subcategory!='' && $condicion!=''){ $where="WHERE categoria_idcategoria='$categoria' && tipo_producto_idtipo_producto='$subcategory' && condicion_producto='$condicion'";}


if($categoria!='' && $subcategory=='' && $condicion!=''){ $where="WHERE categoria_idcategoria='$categoria' && condicion_producto='$condicion'";}
if($categoria=='' && $subcategory=='' && $condicion!=''){ $where="WHERE condicion_producto='$condicion'";}


$sql2 = "SELECT idproducto,nombre_producto,descripcion_producto,monto_producto FROM producto $where";
$result2 = $db->query($sql2);

// total usuarios
$cant_registro = mysqli_num_rows($result2);

//Paginacion
	$PorPagina=3;
	$Paginas=ceil($cant_registro/$PorPagina);

	$Pagina = (isset($_POST['Pagina']))?(int)$_POST['Pagina']:1;
	$Iniciar = ($Pagina-1)*$PorPagina;

$sql3 = "SELECT idproducto,nombre_producto,descripcion_producto,monto_producto FROM producto $where limit $Iniciar,$PorPagina";
$result3 = $db->query($sql3);

while ($query_result = $result3->fetch_array())
{
	$idproducto= $query_result['idproducto'];
	$nombre_producto= $query_result['nombre_producto']; 
	$descripcion_producto= $query_result['descripcion_producto'];
	$monto_producto= $query_result['monto_producto'];
	
	$sql60 = "SELECT idfotos_productos,ruta_fotos FROM fotos_productos WHERE producto_idproducto='$idproducto' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

?>					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<? echo $fila60[ruta_fotos] ; ?>" width="200" />
                            <div class="caption">
                                
                                <h4>
                                	<a href="single.php"><? echo $nombre_producto; ?></a>
                                </h4>
                                <p><? echo $descripcion_producto ; ?></p>
                                <h4 class="pull-right">Bs. <? echo $monto_producto; ?></h4>
								<a href="mostrar_producto.php?idproducto=+<? echo"$idproducto"; ?>" class="btn btn-danger btn-xs">Leer mas</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

<?
} 

		$Anterior=($Pagina-1);
		$Siguiente=($Pagina+1);
						
?> 

<ul class="pagination">
  <?php if(!($Pagina<=1)): ?>
		<li>
			<a <?php echo" onClick='llamar($Anterior)'"?> aria-label="Anterior">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
	<?php endif;?>
  					
						  <?php
							  if($Paginas>=1)
							  {
								  for($x=1;$x<=$Paginas;$x++)
								  {
									  echo($x==$Pagina)?"<li class='active'><a onClick='llamar($x)'>$x</a></li>":
									  "<li><a onClick='llamar($x)'>$x</a></li>";
								  }
							  }
							?>
							
  <?php if(!($Pagina>=$Paginas)):?>
							<li>
							  <a <?  echo" onClick='llamar($Siguiente)'"; ?> aria-label="Siguiente">
								<span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
							<?php endif;?>
</ul>
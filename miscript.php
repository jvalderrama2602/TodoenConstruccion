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

while ($query_result = $result2->fetch_array())
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
								<a href="mostrar_producto.php?idproducto" class="btn btn-danger btn-xs">Leer mas</a>
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
?> 
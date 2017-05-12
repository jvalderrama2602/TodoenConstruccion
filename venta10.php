<?

include('header.php');

?>    <!-- Page Content -->
 <br>
    <div class="container">

        <div class="row">

            <div class="col-md-2">
                <p class="lead">Venta</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-10">
                <div class="row">

 <?               
$sql2 = "SELECT idproducto,nombre_producto,descripcion_producto,monto_producto FROM producto";
$result2 = $db->query($sql2);

while ($query_result = $result2->fetch_array())
{
	$idproducto= $query_result['idproducto'];
	$nombre_producto= $query_result['nombre_producto']; 
	$descripcion_producto= $query_result['descripcion_producto'];
	$monto_producto= $query_result['monto_producto'];
	
	$sql60 = "SELECT fotos_producto,tipo_imagen FROM fotos_productos WHERE producto_idproducto='$idproducto' LIMIT 1";
	$result60 = $db->query($sql60);
	$fila60 = $result60 -> fetch_array();

?>					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="data:image/jpg; base64 ,<? echo base64_encode($fila60[fotos_producto]); ?>" width="200" />
                            <div class="caption">
                                
                                <h4>
                                	<a href="single.php"><? echo $nombre_producto; ?></a>
                                </h4>
                                <p><? echo $descripcion_producto ; ?></p>
                                <h4 class="pull-right">Bs. <? echo $monto_producto; ?></h4>
								<a href="mostrar_producto.php?idproducto=+<? echo $idproducto; ?>" class="btn btn-danger btn-xs">Leer mas</a>
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
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

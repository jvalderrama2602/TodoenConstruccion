<!doctype html>

<html>

<head>





    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>



    <title>Administración</title>



    <link rel="shortcut icon" href="../images/favicon.ico">



    <link rel='stylesheet' href='../../css/settings.css' type='text/css' media='all'/>



    <link rel='stylesheet' href='../../css/bootstrap.min.css' type='text/css' media='all'/>



    <link rel='stylesheet' href='../../css/font-awesome.min.css' type='text/css' media='all'/>



    <link rel='stylesheet' href='../../css/elegant-icon.css' type='text/css' media='all'/>



    <link rel='stylesheet' href='../../css/style.css' type='text/css' media='all'/>



    <link rel='stylesheet' href='../../css/commerce.css' type='text/css' media='all'/>



</head>



<body>



<?

include_once('../../conexion/conexion.php');

	

	$sql2 = "SELECT idcategoria,nombre_categoria,suspendido_categoria FROM categoria";

	$result2 = $db->query($sql2);

?>

	<div id="wrapper" class="wide-wrap">

			<div class="offcanvas-overlay"></div>
			<div class="content-container">

				<div class="container">

					<div class="row">

						<div class="col-md-12">

							<div class="main-content">

								



								<div class="commerce">

									<form>

										<table class="table shop_table cart">

											<thead>

												<tr>

													<th class="product-remove hidden-xs">Acción</th>

													<th class="product-name">Código</th>

													<th class="product-price text-center">Nombre</th>

													<th class="product-quantity text-center">Status</th>

													<th class="product-subtotal text-center hidden-xs"></th>

												</tr>

											</thead>

											<tbody>

															<?	

															while ($query_result = $result2->fetch_array())

															{

																$idestado= $query_result['idcategoria'];

																$nombre_estado= $query_result['nombre_categoria'];

																$suspendido= $query_result['suspendido_categoria'];

																

																echo "<tr class='cart_item'> \n

																<td class='product-remove hidden-xs'>\n

																<a href='#' class='remove' title='Remove this item'>&times;</a>\n

																</td>";





																echo "<td class='product-subtotal hidden-xs text-center'>\n

																	<span class='amount'>$idestado</span>\n

																	</td> \n";

																echo "<td class='product-name'> \n

																	<a href='#'>$nombre_estado</a> \n

																	<dl class='variation'> \n

																	</td> \n";

																echo "<td class='product-price text-center'>\n

																	<span class='amount'>$suspendido</span>\n

																	</td> \n";

																

															?>

																<td class="product-quantity text-center">

																	<div class="quantity">

																		<a href="modificar_usuarios.php?codigo=+<?=$idestado;?>" target="_blank" onClick="window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;">Editar</a>

																	</div>

																</td>												

															</tr>

															<?

															}

															?>



								

											</tbody>

										</table>

									</form>

							

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

<table>

	<tr><td><a href="../categoria/agregar_categoria.php">AGREGAR CATEGORIA</a></td></tr>

</table>













 <script type='text/javascript' src='../../js/jquery.js'></script>



    <script type='text/javascript' src='../../js/jquery-migrate.min.js'></script>



    <script type='text/javascript' src='../../js/easing.min.js'></script>



    <script type='text/javascript' src='../../js/bootstrap.min.js'></script>



    <script type='text/javascript' src='../../js/superfish-1.7.4.min.js'></script>



    <script type='text/javascript' src='../../js/script.js'></script>







</body>

</html>
<?php

$tablet_browser = 0;

$mobile_browser = 0;

$body_class = 'desktop';

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {

    $tablet_browser++;

    $body_class = "tablet";

}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {

    $mobile_browser++;

    $body_class = "mobile";

}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {

    $mobile_browser++;

    $body_class = "mobile";

}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));

$mobile_agents = array(

    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',

    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',

    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',

    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',

    'newt','noki','palm','pana','pant','phil','play','port','prox',

    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',

    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',

    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',

    'wapr','webc','winw','winw','xda ','xda-');

if (in_array($mobile_ua,$mobile_agents)) {

    $mobile_browser++;

}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {

    $mobile_browser++;

    //Check for tablets on opera mini alternative headers

    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));

    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {

      $tablet_browser++;

    }

}

if ($tablet_browser > 0) {

// Si es tablet has lo que necesites

   header('Location: https://todoenconstruccion.com.ve/movil/');

  exit();

}

else if ($mobile_browser > 0) {

// Si es dispositivo mobil has lo que necesites

   header('Location: https://todoenconstruccion.com.ve/movil/');

  exit();

}



?>

<?php

session_start();

$idusuario = $_SESSION["idusuario"];

$nombre_usuario = $_SESSION["nombre_usuario"];

$apellido_usuario = $_SESSION["apellido_usuario"];

$carrito = $_SESSION["carrito"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<title>Todo En Construccion</title>

<!-- CSS DE LUIS -->

<link href="style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/nivo-slider.css" />

<link rel="stylesheet" href="css/mi-slider.css" />



<!-- Place somewhere in the <head> of your document -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css">





<link rel="stylesheet" href="themes/default/default.css" />

<script src="js/jquery-3.1.1.min.js"></script>

<script src="js/jquery.nivo.slider.js"></script>



<script type="text/javascript">

$(window).on('load', function() {

    $('#slider').nivoSlider();

});

</script>



<script language="javascript" type="text/javascript">

function getXMLHTTPRequest()

{

	try { req = new XMLHttpRequest(); }

	catch(err1)

	{

  		try { req = new ActiveXObject("Msxml2.XMLHTTP"); }

		catch (err2)

		{try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch (err3) { req = false; }}

	}

	return req;

}



var http = getXMLHTTPRequest();

var http2 = getXMLHTTPRequest();



function enviarHTTP ()

{

	var login = document.getElementById("username").value;

	var password = document.getElementById("password").value;



	if(username!="" || password!="")

	{

		var query= "login=" + login +"&password=" + password;

		http.open ("GET", "verificar_usuario.php?" + query, true);

		http.onreadystatechange = respuestaHTTP;

		http.send(null); // se envia la petición

	}

}



function respuestaHTTP ()

{

	if (http.readyState == 4)

	{

		if (http.status == 200)

		{

			var respuesta_php = http.responseText;



			if(isNaN(respuesta_php)==true)

			{

				if(respuesta_php=='no_existe')

				{alert('no_existe');}

				if(respuesta_php==clave_invalida)

				{alert('clave_invalida');}

			}

			else

			{

				window.location.reload();

			}

		}

	}

}





function enviarHTTPlogout ()

{
		http2.open ("GET", "logout.php", true);

		http2.onreadystatechange = respuestaHTTPlogout;

		http2.send(null); // se envia la petición
}



function respuestaHTTPlogout ()

{

		if (http2.readyState == 4)

	{

		if (http2.status == 200)

		{

			var respuesta = http2.responseText;

            window.location="index.php";

		}

	}

}

</script>







<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- FIN CSS DE LUIS -->

<!-- CSS DE JOSE -->

<link rel="shortcut icon" href="images/favicon.ico">

<link rel='stylesheet' href='css/settings.css' type='text/css' media='all'/>

<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'/>

<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>

<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all'/>

<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>

<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>

<!-- FIN CSS DE JOSE -->





</head>



<body>

<?

require_once('conexion/conexion.php');

?>



	<!--MENU DEL MOVIL-->

		<div class="offcanvas open">

			<div class="offcanvas-wrap">

				<div class="offcanvas-user clearfix">

					<a class="offcanvas-user-wishlist-link" href="#">

						<i class="fa fa-heart-o"></i>Camíón

					</a>

					<a class="offcanvas-user-account-link" href="#">

						<i class="fa fa-user"></i>Cuenta

					</a>

				</div>

				<nav class="offcanvas-navbar">

					<ul class="offcanvas-nav">

						<li><a href="index.php">Inicio</a>

						</li>

						<li><a href="#">Galerias</a>

						</li><li><a href="#">Noticias</a></li>

						<li><a href="#">Blog</a></li>

					</ul>

				</nav>

			</div>

		</div>

<!--AQUI TERMINA EL MENU DEL MOVIL -->





		<div id="wrapper" class="wide-wrap">

			<div class="offcanvas-overlay"></div>

			<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">

				<div class="topbar">

					<div class="container topbar-wap">

						<div class="row">

							<div class="col-sm-6 col-left-topbar">

								<div class="left-topbar">

									Compra y venda sus servicios, abra su cuenta ya!

									<a href="#"><i class="fa fa-long-arrow-right"></i></a>

								</div>

							</div>

							<div class="col-sm-6 col-right-topbar">

								<div class="right-topbar">

									<div class="user-login">

										<?

										if($idusuario!="")

										{ ?>

										<ul class="nav top-nav">

											<li><a onClick="enviarHTTPlogout()">&nbsp&nbsp&nbsp&nbsp&nbsp Salir</a></li>

										</ul>

										<ul class="nav top-nav">

											<li><a href="mi_cuenta.php?idusuario=+<?=$idusuario;?>">&nbsp Cuenta</a></li>

										</ul>

										<ul class="nav top-nav">

											<li><a><? echo" Bienvenido:  $nombre_usuario $apellido_usuario"; ?>&nbsp&nbsp&nbsp&nbsp</a></li>

										</ul>

										<?

										}

										else

										{

										?>

										<ul class="nav top-nav">

											<li><a data-rel="loginModal" href="#loginModal" >&nbspIngresar&nbsp</a></li>

										<!--	<li><a href="" onclick="enviarHTTP()" >&nbspIngresar&nbsp</a></li>-->

										</ul>

										<ul class="nav top-nav">

											<li><a href='login.php'>Registrarse&nbsp</a></li>

										</ul>

										<? } ?>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="navbar-container" >

					<div class="navbar navbar-default navbar-scroll-fixed">

						<div class="navbar-default-wrap" style="background-color: #FFFF00">

							<div class="container">

								<div class="row">

									<div class="navbar-default-col">

										<div class="navbar-wrap">

											<div class="navbar-header">

												<button type="button" class="navbar-toggle">

													<span class="sr-only">Navegación</span>

													<span class="icon-bar bar-top"></span>

													<span class="icon-bar bar-middle"></span>

													<span class="icon-bar bar-bottom"></span>

												</button>

												<a class="navbar-search-button search-icon-mobile" href="#">

													<i class="fa fa-search"></i>

												</a>

												<a class="cart-icon-mobile" href="#">

													<i class="elegant_icon_bag"></i><span>0</span>

												</a>

												<a class="navbar-brand" href="./">

													<img class="logo" alt="todo" src="imagen/logo.png">

													<img class="logo-fixed" alt="todo" src="imagen/logo.png">

													<img class="logo-mobile" alt="todo" src="imagen/logo.png">

												</a>

											</div>

											<nav class="collapse navbar-collapse primary-navbar-collapse">

												<ul class="nav navbar-nav primary-nav">

													<li class="current-menu-item menu-item-has-children dropdown">

														<a href="index.php" class="dropdown-hover">

															<span class="underline">Inicio</span> <span class="caret"></span>

														</a>



													</li>

													<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">

														<a href="#" class="dropdown-hover">

															<span class="underline">Galerías</span> <span class="caret"></span>

														</a>



													</li>



													<li class="menu-item-has-children dropdown">

														<a href="#" class="dropdown-hover">

															<span class="underline">Noticias</span> <span class="caret"></span>

														</a>



													</li>

													<li class="menu-item-has-children dropdown">

														<a href="#" class="dropdown-hover">

															<span class="underline">Contacto</span> <span class="caret"></span>

														</a>

													</li>

												</ul>

											</nav>

											<div class="header-right">

												<div class="navbar-search">

													<a class="navbar-search-button" href="#">

														<i class="fa fa-search"></i>

													</a>

													<div class="search-form-wrap show-popup hide"></div>

												</div>

												<div class="navbar-minicart navbar-minicart-topbar">

													<div class="navbar-minicart">

														<a class="minicart-link" href="#">
															<div id="actualizar_numer">
															<span class="minicart-icon">

																<i class="fa fa-shopping-cart"></i>
																
																
																<span><? echo count($_SESSION["detalle"]); ?></span>
															
															</span>
															</div>
														</a>

													</div>

												</div>

												<!--<div class="navbar-wishlist">

													<a class="wishlist" href="wishlist.html">

														<i class="fa fa-heart-o"></i>

													</a>

												</div>-->

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="header-search-overlay hide">

							<div class="container">

								<div class="header-search-overlay-wrap">

									<form class="searchform">

										<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Buscar"/>

									</form>

									<button type="button" class="close">

										<span aria-hidden="true" class="fa fa-times"></span>

										<span class="sr-only">Cerrar</span>

									</button>

								</div>

							</div>

						</div>

					</div>

				</div>

			</header>







		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content">



						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal">

								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>

							<h4 class="modal-title">Ingresar</h4>

						</div>

						<div class="modal-body">

							<div class="form-group">

								<label>Usuario</label>

								<input type="text" id="username" name="username" required class="form-control" placeholder="Username">

							</div>

							<div class="form-group">

								<label for="password">Clave</label>

								<input type="password" id="password" required name="password" class="form-control" placeholder="Password">

							</div>

							<div class="checkbox clearfix">

								<label class="form-flat-checkbox pull-left">

									<input type="checkbox" name="rememberme" id="rememberme" value="forever">

									<i></i>&nbsp;Recordar

								</label>

								<span class="lostpassword-modal-link pull-right">

									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Olvidó su clave?</a>

								</span>

							</div>

						</div>

						<div class="modal-footer">

							<span class="user-login-modal-register pull-left">

								<a href="registrar.php">No eres miembro aún?</a>

							</span>

							<button class="btn btn-default btn-outline" onclick="enviarHTTP()">Iniciar</button>

						</div>



				</div>

			</div>

		</div>

		<!-- registro

		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content">

					<form id="userregisterModalForm">

						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal">

								<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>

							</button>

							<h4 class="modal-title">Registrar Cuenta</h4>

						</div>

						<div class="modal-body">

							<div class="user-login-or"><span>or</span></div>

							<div class="form-group">

								<label>Usuario</label>

								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">

							</div>

							<div class="form-group">

								<label for="user_email">Email</label>

								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">

							</div>

							<div class="form-group">

								<label for="user_password">Clave</label>

								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">

							</div>

							<div class="form-group">

								<label for="user_password">Reescriba su clave</label>

								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">

							</div>

						</div>

						<div class="modal-footer">

							<span class="user-login-modal-link pull-left">

								<a data-rel="loginModal" href="#loginModal">Ya tienes cuenta?</a>

							</span>

							<button type="submit" class="btn btn-default btn-outline">Registrar</button>

						</div>

					</form>

				</div>

			</div>

		</div>

		 -->



		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content">

					<form id="userlostpasswordModalForm">

						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal">

								<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>

							</button>

							<h4 class="modal-title">Olvidó password</h4>

						</div>

						<div class="modal-body">

							<div class="form-group">

								<label>Usuario o E-mail:</label>

								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">

							</div>

						</div>

						<div class="modal-footer">

							<span class="user-login-modal-link pull-left">

								<a data-rel="loginModal" href="#loginModal">Ya tienes cuenta?</a>

							</span>

							<button type="submit" class="btn btn-default btn-outline">Entrar</button>

						</div>

					</form>

				</div>

			</div>

		</div>

		<div class="minicart-side">

			<div class="minicart-side-title">

				<h4>Camión</h4>

			</div>

			<div class="minicart-side-content">

				<div class="minicart">

					<div class="minicart-header no-items show">
					
							<table id="tabla"  class="table">
						    
    						</table>
	

					</div>

					<div class="minicart-footer">

						<div class="minicart-actions clearfix">

							<a class="button no-item-button" href="explorar.php">

								<span class="text">Explorar</span>

							</a>

						</div>

					</div>

				</div>

			</div>

		</div>
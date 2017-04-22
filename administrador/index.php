<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Administración</title>
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel='stylesheet' href='../css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='../css/commerce.css' type='text/css' media='all'/>
	
	
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

function enviarHTTP () 
{
	var login = document.getElementById("login").value;
	var password = document.getElementById("password").value;;
	var cont=0;
	
	if(login==""){ alert("El Login Se Encuentra Vacio");cont=1; }
	
	if(password=="")
	{ alert("El Password Se Encuentra Vacio");cont=1; }
	
	if(cont==0)
	{ 
		var query= "login=" + login +"&password=" + password;
		http.open ("GET", "consultar_usuario.php?" + query, true);
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
				if(respuesta_php==no_existe)
				{alert('no_existe');}
				if(respuesta_php==clave_invalida)
				{alert('clave_invalida');}
			}
			else
			{  
				window.location='entrar.php'; 
			}
			
		}
	}
}
</script>
	
	</head>
	<body>


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
						<li><a href="../index.php">Inicio</a>
						</li>
						<!--<li><a href="#">Galerias</a>
						</li><li><a href="#">Noticias</a></li>
						<li><a href="#">Blog</a></li>-->	
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
									Compra y venda sus servicios, inicia sesión ahora... 
									<a href="#"><i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-sm-6 col-right-topbar">
							<!--	<div class="right-topbar">
									<div class="user-login">
										<ul class="nav top-nav">
											<li><a data-rel="loginModal" href="#">&nbspVender</a></li>
										</ul>
										<ul class="nav top-nav">
											<li><a data-rel="loginModal" href="registrar.php">&nbspIngresar&nbsp</a></li>
										</ul>
										<ul class="nav top-nav">
											<li><a data-rel="loginModal" href="#">Registrarse&nbsp</a></li>
										</ul>
									</div>
								</div>-->
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
													<img class="logo" alt="todo" src="../imagen/logo.png">
													<img class="logo-fixed" alt="todo" src="../imagen/logo.png">
													<img class="logo-mobile" alt="todo" src="../imagen/logo.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="current-menu-item menu-item-has-children dropdown">
														<a href="../index.php" class="dropdown-hover">
															<span class="underline">Inicio</span> <span class="caret"></span>
														</a>
														
													</li>
												<!--	<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
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
													</li>-->
												</ul>
											</nav>
											<div class="header-right">
											<!--		<div class="navbar-search">
													<a class="navbar-search-button" href="#">
														<i class="fa fa-search"></i>
													</a>
													<div class="search-form-wrap show-popup hide"></div>
												</div>
												<div class="navbar-minicart navbar-minicart-topbar">
													<div class="navbar-minicart">
														<a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart"></i>
																<span>0</span>
															</span>
														</a>
													</div>
												</div>
											<div class="navbar-wishlist">
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
			<div class="heading-container">
				<div class="container heading-standar">
					<div class="page-breadcrumb">
						<ul class="breadcrumb">
							<li>
								<span>
									<a class="home" href="#">
										<span>Inicio</span>
									</a>
								</span>
							</li>
							<li>
								<span>Inicio de Sesión</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			


			<div class="content-container no-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce commerce-account">
									<h2 class="commerce-account-heading">Inicio de Sesión</h2>
									<div class="login">
										<div class="form-row form-row-wide">
											<label for="login">
												Usuario <span class="required">*</span>
											</label>
											<input type="text" class="input-text" name="login" id="login"/>
										</div>
										<div class="form-row form-row-wide">
											<label for="password1">Password <span class="required">*</span></label>
											<input class="input-text" type="password" name="password" id="password" />
										</div>
										<div class="form-row">
											
											<button class="btn btn-outline rounded" onclick="enviarHTTP()">Entrar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Ingresar</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Iniciar con Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Usuario</label>
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Clave</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
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
								<a data-rel="registerModal" href="#">No eres miembro aún?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Iniciar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
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
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Iniciar con Facebook
								</button>
							</div>
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
						Su camión está vació.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Explorar</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='../js/jquery.js'></script>
		<script type='text/javascript' src='../js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='../js/easing.min.js'></script>
		<script type='text/javascript' src='../js/bootstrap.min.js'></script>
		<script type='text/javascript' src='../js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='../js/script.js'></script>
		
	</body>
</html>
<?php
echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');
?>


<?

include('header.php');
require_once('conexion/conexion.php');
?>


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
function enviarHTTPib ()
{
	var login = document.getElementById("usernameib").value;
	var password = document.getElementById("passwordib").value;
	alert(login);
		alert(password);
	if(login!="" || password!="")
	{

		var query= "login=" + login +"&password=" + password;
		http.open ("GET", "verificar_usuario.php?" + query, true);
		http.onreadystatechange = respuestaHTTPib;
		http.send(null); // se envia la petición
	}
}



function respuestaHTTPib ()
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
				window.location="index.php";
			}
		}
	}
}

</script>



<!--AQUI TERMINA EL MENU DEL MOVIL -->



		<div id="wrapper" class="wide-wrap">



			<div class="offcanvas-overlay"></div>







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



								<span>Bienvenida</span>



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



									<h2 class="commerce-account-heading">Iniciar Sesión</h2>



									<div class="login">

										<div class="form-row">
											<div id="x1">
												<div class="alert alert-success">
													Registro Exitoso. <strong>Inicie sesión ahora!</strong>
												</div>
											</div>


										</div>

										<div class="form-row form-row-wide">



											<label for="login">



												Usuario <span class="required">*</span>



											</label>



											<input type="text" class="input-text" name="usernameib" id="usernameib" value="" />



										</div>



										<div class="form-row form-row-wide">



											<label for="password1">Password <span class="required">*</span></label>



											<input class="input-text" type="password" name="passwordib" id="passwordib"/>



										</div>

										<div class="form-row">


											<button class="btn btn-outline rounded" type="submit" value="grabar" onclick="enviarHTTPib()">Entrar</button>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

<script type="text/javascript">
	setTimeout(ocultar,2500);
	function ocultar(){
    element=document.getElementById("x1");
		//document.getElementById("x1").style.display="none";
	var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
	}
</script>
<?
include('footer.php');
?>
<?

include('header.php');

require_once('conexion/conexion.php');

?>

<script language="javascript">

$(document).ready(function(){

   $("#category").change(function () {


           $("#category option:selected").each(function () {







            id_category = $(this).val();







            $.post("subcategories.php", { id_category: id_category }, function(data){







                $("#subcategory").html(data);







            });







        });







   })







});







</script>















<script language="javascript" type="text/javascript">







function soloNumeros(evt)







{







    evt = (evt) ? evt : event;







    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));







    var respuesta = true;







    if (charCode > 31 && (charCode < 48 || charCode > 57)){  respuesta = false;  }







    return respuesta;







}



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



function enviarHTTPcc ()

{

	var nombre = document.getElementById("nombrec").value;

	var apellido = document.getElementById("apellidoc").value;

	var elementos = document.getElementsByName("nac");

 	for(var i=0; i<elementos.length; i++)

	{ if(elementos[i].checked==true){ var nac=elementos[i].value;} }



	var ci = document.getElementById("ci").value;



	var lista = document.getElementById("cod_cel");



	var valorSeleccionado = lista.options[lista.selectedIndex].value;

	var num_cel = document.getElementById("num_cel").value;



	var cod_local = document.getElementById("cod_local").value;



	var num_local = document.getElementById("num_local").value;



	var lista_category = document.getElementById("category");



	var valorSeleccionado_lista_category = lista_category.options[lista_category.selectedIndex].value;



	var lista2 = document.getElementById("subcategory");



	var valorSeleccionado2 = lista2.options[lista2.selectedIndex].value;



	var email = document.getElementById("emailc").value;



	var login = document.getElementById("loginc").value;



	var pass = document.getElementById("passc").value;



	var cont=0;

	if(login==""){alert('El Login se encuentra vacio');cont=1;}





	if(cont==0)







	{

		var tel_cel=valorSeleccionado+'-'+num_cel;

		var tel_loc=cod_local+'-'+num_local;

		var query= "nombre=" + nombre +"&apellido=" + apellido +"&nac=" + nac +"&ci=" + ci +"&tel_cel=" + tel_cel +"&tel_loc=" + tel_loc +"&idestado=" + valorSeleccionado_lista_category +"&idciudad=" + valorSeleccionado2 +"&email=" + email +"&login=" + login +"&pass=" + pass;

		http.open ("GET", "grabar_registro.php?" + query, true);

		http.onreadystatechange = respuestaHTTPcc;

		http.send(null); // se envia la petición

	}

}



function respuestaHTTPcc ()

{

if (http.readyState == 4)

	{

		if (http.status == 200)

		{

			var respuesta_php = http.responseText;



			alert(respuesta_php);



			if(respuesta_php!="")

			{

				//alert('Se Ha Registrado Correctamente')

				window.location="bienvenida.php";

			}

		}

	}

}



function enviarHTTP20 ()

{

	var nombre = document.getElementById("loginc").value;

	if(nombre!="")

	{

		var query= "login=" + nombre;

		http2.open ("GET", "verificar_login.php?" + query, true);

		http2.onreadystatechange = respuestaHTTP2cc;

		http2.send(null); // se envia la petición

	}



}



function respuestaHTTP2cc ()

{

	if (http2.readyState == 4)



	{

		if (http2.status == 200)

    {

			var respuesta_php2 = http2.responseText;

			if(isNaN(respuesta_php2)==true)

			{

				document.getElementById('x1').style.display = '';

				document.getElementById('x2').style.display = 'none';

			}

			else

			{

				document.getElementById('x1').style.display = 'none';

				document.getElementById('x2').style.display = '';

				document.getElementById("loginc").value='';

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







								<span>Crear Cuenta</span>







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







									<h2 class="commerce-account-heading">Crear Cuenta</h2>







									<div class="login">



										<div class="form-row">

											<div id="x1" style="display: none">

												<div class="alert alert-success">

													El usuario seleccionado está disponible

												</div>

											</div>



											<div id="x2" style="display: none">

												<div class="alert alert-danger">

													El usuario seleccionado <strong>NO</strong> está disponible

												</div>

											</div>

										</div>



										<div class="form-row form-row-wide">







											<label for="login">







												Usuario <span class="required">*</span>







											</label>







											<input type="text" class="input-text" name="loginc" id="loginc" value="" onBlur="enviarHTTP20()"/>







										</div>







										<div class="form-row form-row-wide">







											<label for="password1">Password <span class="required">*</span></label>







											<input class="input-text" type="password" name="passc" id="passc"/>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Nombre <span class="required">*</span>







											</label>







											<input type="text" class="input-text" name="login" id="nombrec" value=""/>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Apellido <span class="required">*</span>







											</label>







											<input type="text" class="input-text" name="login" id="apellidoc" value=""/>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Cedula de Identidad<span class="required">*</span>







											</label>







											<input type="radio" name="nac" id="V" value="V" checked />V&nbsp;&nbsp;















											<input type="radio" name="nac" id="E" value="E" />E&nbsp;&nbsp;















											<input class="input-text" type="text" name="ci" id="ci" size="20"  maxlength="9" placeholder="123456789" onkeypress="return soloNumeros(event);"/>























										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Teléfono Celular <span class="required">*</span>







											</label>







											<select name="cod_cel" id="cod_cel">















											<option value="0412">0412</option>















											<option value="0414">0414</option>















											<option value="0416">0416</option>















											<option value="0424">0424</option>















										</select>&nbsp;















										<input class="input-text" type="text" name="num_cel" id="num_cel" size="12" maxlength="7" placeholder="1234567" onkeypress="return soloNumeros(event);"/>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Teléfono Local <span class="required">*</span>







											</label>







											<input type="text" name="cod_local" id="cod_local" size="6" maxlength="4" onkeypress="return soloNumeros(event);"/>&nbsp;















										<input type="text" name="num_local" id="num_local" size="12" maxlength="7" onkeypress="return soloNumeros(event);" />







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Estado <span class="required">*</span>







											</label>







												<select name="category" id="category">







											<?







												$sql2 = "SELECT idestado,nombre_estado FROM estado WHERE suspendido_estado='' ORDER BY nombre_estado ASC ";







												$result2 = $db->query($sql2);















												while ($query_result = $result2->fetch_array())







												{







													$id_category= $query_result['idestado'];







													$nombre_estado= $query_result['nombre_estado'];







													?><option <? echo"value='$id_category'"; ?>><? echo"$nombre_estado"; ?></option><?







												}







											?>







										</select>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Ciudad <span class="required">*</span>







											</label>







											<select name="subcategory" id="subcategory">















				</select>







										</div>







										<div class="form-row form-row-wide">







											<label for="login">







												Email <span class="required">*</span>







											</label>







											<input type="email" class="input-text" name="emailc" id="emailc" value=""/>







										</div>







										<div class="form-row">



											<button class="btn btn-outline rounded" type="submit" value="grabar" onclick="enviarHTTPcc()">Crear Cuenta</button>





										</div>







									</div>









								</div>







							</div>







						</div>







					</div>







				</div>







			</div>







































<?















include('footer.php');















?>
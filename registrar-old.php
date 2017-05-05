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
	
function enviarHTTP () 
{
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	
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
	
	var email = document.getElementById("email").value;
	var login = document.getElementById("login").value;
	var pass = document.getElementById("pass").value;
	var cont=0;
	
	
	if(cont==0)
	{ 
		var tel_cel=valorSeleccionado+'-'+num_cel;
		var tel_loc=cod_local+'-'+num_local;
		
		var query= "nombre=" + nombre +"&apellido=" + apellido +"&nac=" + nac +"&ci=" + ci +"&tel_cel=" + tel_cel +"&tel_loc=" + tel_loc +"&idestado=" + valorSeleccionado_lista_category +"&idciudad=" + valorSeleccionado2 +"&email=" + email +"&login=" + login +"&pass=" + pass;
		http.open ("GET", "grabar_registro.php?" + query, true);
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
			
			alert(respuesta_php);
			
			if(respuesta_php!="")
			{
				alert('Se Ha Registrado Correctamente')
				window.location="index.php";
			}
		}
	}
}
	
function enviarHTTP2 () 
{
	var nombre = document.getElementById("login").value;
	
	if(nombre!="")
	{
		var query= "login=" + nombre;
		http2.open ("GET", "verificar_login.php?" + query, true);
		http2.onreadystatechange = respuestaHTTP2;
		http2.send(null); // se envia la petición
	}
}

function respuestaHTTP2 () 
{
	if (http2.readyState == 4) 
	{  
		if (http2.status == 200) 
		{ 
			var respuesta_php2 = http2.responseText; 
			
			if(respuesta_php2=="")
			{
				document.getElementById('x1').style.display = '';
				document.getElementById('x2').style.display = 'none';
			}
			else
			{
				document.getElementById('x1').style.display = 'none';
				document.getElementById('x2').style.display = '';
			}
		}
	}
}

</script>

<div class="registrar">
	<table width="600px" align="center" border="1">
		<tr id="x1" style="display: none" ><td colspan="2">El Login NO Existe</td></tr>
		<tr id="x2" style="display: none"><td colspan="2">El Login ya existe</td></tr>
		<tr><td colspan="2" align="center">Registrar</td></tr>
		<tr>
			<td>Login</td>
			<td>Clave</td>
		</tr>
		<tr>  
			<td><input type="text" name="login" id="login" size="40" maxlength="60" placeholder="Login de Usuario" onBlur="enviarHTTP2()" /></td>
			<td><input type="password" name="pass" id="pass" size="40" maxlength="40" placeholder=" Password" /></td>
		</tr>
		<tr>

			<td width="292">Nombre</td>

			<td width="292">Apellido</td>

		</tr>

		<tr>

			<td width="292"><input type="text" name="nombre" id="nombre" size="40"  maxlength="45" placeholder=" Nombre del Usuario"/></td>

			<td width="292"><input type="text" name="apellido" id="apellido" size="40"  maxlength="45" placeholder=" Apellido del Usuario"/></td>

		</tr>

		<tr>

			<td>Documento C.I.</td>

			<td>Telefono Celular</td>

		</tr>

		<tr>

			<td width="292">

				<input type="radio" name="nac" id="V" value="V" checked />V&nbsp;&nbsp;

				<input type="radio" name="nac" id="E" value="E" />E&nbsp;&nbsp;

				<input type="text" name="ci" id="ci" size="20"  maxlength="9" placeholder=" C.I." onkeypress="return soloNumeros(event);"/>

			</td>

			<td width="292">

				<select name="cod_cel" id="cod_cel">

					<option value="0412">0412</option>

					<option value="0414">0414</option>

					<option value="0416">0416</option>

					<option value="0424">0424</option>

				</select>&nbsp;

				<input type="text" name="num_cel" id="num_cel" size="12" maxlength="7" onkeypress="return soloNumeros(event);"/>

			</td>

		</tr>

		<tr>

			<td>Telefono Local</td>

			<td>Estado</td>

		</tr>

		<tr>

			<td>

				<input type="text" name="cod_local" id="cod_local" size="6" maxlength="4" onkeypress="return soloNumeros(event);"/>&nbsp;

				<input type="text" name="num_local" id="num_local" size="12" maxlength="7" onkeypress="return soloNumeros(event);" />

			</td>

			<td>

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
			</td>

		</tr>

		<tr>
			<td>Ciudad</td>
			<td>E-mail</td>
		</tr>
		<tr>
			<td>
				<select name="subcategory" id="subcategory">
					
				</select>
			</td>
			<td><input type="email" name="email" id="email" size="40" maxlength="60" placeholder=" Tu E-mail@hotmail.com" /></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><a onClick="enviarHTTP()">Grabar</a></td>
		</tr>
	</table>

</div>

<?

include('footer.php');

?>
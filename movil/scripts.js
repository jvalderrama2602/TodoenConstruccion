

/*----------------REGISTRO CLIENTE--------------------------*/

function soloNumeros(evt)
{
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    var respuesta = true;
    if (charCode > 31 && (charCode < 48 || charCode > 57)){  respuesta = false;  }
    return respuesta;
}
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
        Materialize.toast("El usuario seleccionado está disponible", 3e3);
        //document.getElementById('x1').style.display = '';
        //document.getElementById('x2').style.display = 'none';
      }
      else
      {
        Materialize.toast("El usuario seleccionado <strong>NO</strong> está disponible", 3e3);
        //document.getElementById('x1').style.display = 'none';
        //document.getElementById('x2').style.display = '';
        document.getElementById("loginc").value='';
      }
    }
  }
}





/*------------------MOVIL-ADMINISTRADOR------------------------*/

function actualizar(a) {
    switch (a) {
      case 0:
        document.getElementById("x1").style.display = "none";
        document.getElementById("x2").style.display = "none";
        document.getElementById("grabar").style.display = "";
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        location.reload(true);
        break;

      case 1:
        document.getElementById("x1").style.display = "none";
        document.getElementById("x2").style.display = "none";
        document.getElementById("grabar").style.display = "";
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        location.reload(true);
        break;

      case 2:
        document.getElementById("x1").style.display = "none";
        document.getElementById("x2").style.display = "none";
        document.getElementById("grabar").style.display = "";
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        location.reload(true);
        break;

      case 3:
        document.getElementById("x1").style.display = "none";
        document.getElementById("x2").style.display = "none";
        document.getElementById("grabar").style.display = "";
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        location.reload(true);
        break;

      default:
        alert("alert");
    }
}

function mostrar(a) {
    switch (a) {
      case 0:
        div = document.getElementById("wrapper2");
        div.style.display = "";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        break;

      case 1:
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        break;

      case 2:
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "";
        div = document.getElementById("wrapper5");
        div.style.display = "none";
        break;

      case 3:
        div = document.getElementById("wrapper2");
        div.style.display = "none";
        div = document.getElementById("wrapper3");
        div.style.display = "none";
        div = document.getElementById("wrapper4");
        div.style.display = "none";
        div = document.getElementById("wrapper5");
        div.style.display = "";
        break;

      default:
        alert("alert");
    }
}

function validar(a) {
    tecla = document.all ? a.keyCode : a.which;
    if (8 == tecla) return true;
    patron = /[A-Za-z\s]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function getXMLHTTPRequest() {
    try {
        req = new XMLHttpRequest();
    } catch (a) {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (b) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (c) {
                req = false;
            }
        }
    }
    return req;
}

var http = getXMLHTTPRequest();

function enviarHTTP01() {
    var a = window.document.formulario_usuario01.nombre.value;
    if ("" != a) {
        var b = "usuario=" + a;
        http.open("GET", "../categoria/grabar_categoria.php?" + b, true);
        http.onreadystatechange = respuestaHTTP01;
        http.send(null);
    }
}

function enviarHTTP02() {
    var a = window.document.formulario_usuario02.tipo.value;
    var b = window.document.formulario_usuario02.nombre.value;
    if (0 != a && "" != b) {
        var c = "estado=" + a + "&nombre=" + b;
        http.open("GET", "../ciudad/grabar_ciudad.php?" + c, true);
        http.onreadystatechange = respuestaHTTP02;
        http.send(null);
    }
}

function enviarHTTP03() {
    var a = window.document.formulario_usuario03.nombre.value;
    if ("" != a) {
        var b = "usuario=" + a;
        http.open("GET", "../estado/grabar_estados.php?" + b, true);
        http.onreadystatechange = respuestaHTTP03;
        http.send(null);
    }
}

function enviarHTTP04() {
    var a = document.getElementById("test3").value;
    var b = document.getElementById("nombre").value;
    var c = document.getElementById("apellido").value;
    var d = document.getElementById("email").value;
    var e = document.getElementById("login").value;
    var f = document.getElementById("password").value;
    var g = document.getElementById("confirmacion").value;
    var h = 0;
    if (f == g) {
        var i = "tipo=" + a + "&nombre=" + b + "&apellido=" + c + "&email=" + d + "&login=" + e + "&pass=" + f + "&confirmacion=" + g;
        http.open("GET", "../super_usuario/grabar_usuario.php?" + i, true);
        http.onreadystatechange = respuestaHTTP04;
        http.send(null);
    } else alert("No son iguales el pass");
}

function respuestaHTTP01() {
    if (4 == http.readyState) if (200 == http.status) {
        var a = http.responseText;
        if ("" == a) Materialize.toast("Atención Registro ya existe", 3e3); else {
            Materialize.toast("Registro correcto", 3e3);
            window.document.formulario_usuario01.nombre.value = "";
            location.reload(true);
        }
    }
}

function respuestaHTTP02() {
    if (4 == http.readyState) if (200 == http.status) {
        var a = http.responseText;
        if ("" == a) Materialize.toast("Atención Registro ya existe", 3e3); else {
            Materialize.toast("Registro correcto", 3e3);
            window.document.formulario_usuario02.nombre.value = "";
            location.reload(true);
        }
    }
}

function respuestaHTTP03() {
    if (4 == http.readyState) if (200 == http.status) {
        var a = http.responseText;
        if ("" == a) Materialize.toast("Atención Registro ya existe", 3e3); else {
            Materialize.toast("Registro correcto", 3e3);
            window.document.formulario_usuario03.nombre.value = "";
            location.reload(true);
        }
    }
}

function respuestaHTTP04() {
    if (4 == http.readyState) if (200 == http.status) {
        var a = http.responseText;
        alert(a);
        if (0 != a) {
            Materialize.toast("Se Ha Registrado Correctamente", 3e3);
            location.href = "usuarios.php";
        } else {
            Materialize.toast("NO Se Ha Registrado", 3e3);
            location.href = "usuarios.php";
        }
    }
}
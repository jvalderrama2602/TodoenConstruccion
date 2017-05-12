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


function enviarHTTP05 ()
{
  var nombre =document.getElementById("nombrep").value;
  var categoria =document.getElementById("category").value;
  //var nombre = window.document.formulario_usuario05.nombrep.value;
  //var categoria = window.document.formulario_usuario05.category.value;

  if(nombre!="" && categoria!=0)
  {
    var query= "nombre=" + nombre +"&categoria=" + categoria;
    http.open ("GET", "../tipo_producto/grabar_tipo_producto.php?" + query, true);
    http.onreadystatechange = respuestaHTTP05;
    http.send(null); // se envia la petición
  }
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

        if (0 != a) {
            Materialize.toast("Se Ha Registrado Correctamente", 3e3);
            location.href = "usuarios.php";
        } else {
            Materialize.toast("NO Se Ha Registrado", 3e3);
            location.href = "usuarios.php";
        }
    }
}

function respuestaHTTP05 ()
{
  if (http.readyState == 4)
  {
    if (http.status == 200)
    {
      var respuesta_php = http.responseText;

      if(respuesta_php=="")
      {
         Materialize.toast("Producto ya existe", 3e3);
            location.href = "producto.php";
      }
      else
      {
        Materialize.toast("Producto Registrado", 3e3);
            location.href = "producto.php";
      }
    }
  }
}
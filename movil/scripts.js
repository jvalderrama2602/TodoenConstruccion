
/*----------------REGISTRO CLIENTE--------------------------*/


function permitidos_loc(evt)
{
var num_caracteres=document.getElementById("num_local").value.length;
/*alert(num_caracteres)*/

if(num_caracteres>=7){
    Materialize.toast("No se permiten más caracteres", 3e3);
    //$("#codcel").select();
    return false;
  };

}
function permitidos_num(evt)
{
var num_caracteres=document.getElementById("num_cel").value.length;
/*alert(num_caracteres)*/

if(num_caracteres>=7){
    Materialize.toast("No se permiten más caracteres", 3e3);
    //$("#codcel").select();
    return false;
  };

}

function permitidos_ci(evt)
{
var num_caracteres=document.getElementById("ci").value.length;
/*alert(num_caracteres)*/

if(num_caracteres>=8){
    Materialize.toast("No se permiten más caracteres", 3e3);
    //$("#codcel").select();
    return false;
  };

}

function permitidos_cod(evt)
{
var num_caracteres=document.getElementById("cod_local").value.length;
/*alert(num_caracteres)*/

if(num_caracteres==3){

    $("#num_local").select();
    return true;
  };

}

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

function  validacion(){

  var login = document.getElementById("loginc").value;
  if(login==""){
  Materialize.toast("Debe Rellenar el campo Usuario", 3e3);
  $("#loginc").select();
  return false;
  }else{
    var query= "login=" + login;
    http2.open ("GET", "../verificar_login.php?" + query, true);
    http2.onreadystatechange = respuestaHTTP2cc01;
    http2.send(null); // se envia la petición
  }


  function respuestaHTTP2cc01 ()
  {
  if (http2.readyState == 4)
  {
    if (http2.status == 200)
    {
      var respuesta_php2 = http2.responseText;
      if(isNaN(respuesta_php2)==true)
      {
  var pass = document.getElementById("passc").value;
  var nombre = document.getElementById("nombrec").value;
  var apellido = document.getElementById("apellidoc").value;
  if(nombre=="" || pass==""){
    Materialize.toast("Debe Rellenar el campo nombre y password", 3e3);
    $("#nombrec").select();
    return false;
    }else if(apellido==""){
    Materialize.toast("Debe Rellenar el campo apellido", 3e3);
    $("#apellidoc").select();
    return false;
    }else{
          var elementos = document.getElementsByName("nac");
        for(var i=0; i<elementos.length; i++)
        { if(elementos[i].checked==true){ var nac=elementos[i].value;} }
        var ci = document.getElementById("ci").value;
        var lista = document.getElementById("cod_cel");
        var valorSeleccionado = lista.options[lista.selectedIndex].value;
          if(ci==""){
          Materialize.toast("Debe Rellenar el campo Cedula de Identidad", 3e3);
          $("#ci").select();
          return false;
          }else if(valorSeleccionado==""){
          Materialize.toast("Código Celular no Válido", 3e3);
          return false;
          }else{
          var largo_num_cel = document.getElementById("num_cel").value.length ;
          var largo_cod_local = document.getElementById("cod_local").value.length;
          var largo_num_local = document.getElementById("num_local").value.length;

          if(largo_num_cel<7){
          Materialize.toast("El número celular no es valido", 3e3);
          $("#num_cel").select();
          return false;
          }else if(largo_cod_local<4){
          Materialize.toast("Código local no Válido", 3e3);
          $("#cod_local").select();
          return false;
          }else if(largo_num_local<7){
          Materialize.toast("Número local no Válido", 3e3);
          $("#num_local").select();
          return false;
          }else{
              var lista_category = document.getElementById("category");
              var valorSeleccionado_lista_category = lista_category.options[lista_category.selectedIndex].value;
              var lista2 = document.getElementById("subcategory");
              if (lista2.options[lista2.selectedIndex].value==""){
              Materialize.toast("Debe Seleccionar una ciudad", 3e3);
              $("#subcategory").select();
              return  false;
              }else{
              var valorSeleccionado2 = lista2.options[lista2.selectedIndex].value;
              var email = document.getElementById("emailc").value;
              if(email==""){
                  Materialize.toast ("Correo electrónico Obligatorio", 3e3);
                  $("#emailc").select();
              }else{
              emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
              if (emailRegex.test(email)) {
              enviarHTTPcc ();
              } else {
              Materialize.toast("Correo no valido", 3e3);
              $("#emailc").select();
              }
              }
            }
          }
          }
    }
      }
      else
      {
        Materialize.toast("El usuario seleccionado&nbsp; <strong>NO</strong>&nbsp; está disponible", 3e3);
        //document.getElementById('x1').style.display = 'none';
        //document.getElementById('x2').style.display = '';
        document.getElementById("loginc").value='';
      }
    }
  }
}



}

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
    http.open ("GET", "../grabar_registro.php?" + query, true);
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



      if(respuesta_php!="")
      {
        //alert('Se Ha Registrado Correctamente')
        window.location="login.php";
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
    http2.open ("GET", "../verificar_login.php?" + query, true);
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
        Materialize.toast("El usuario seleccionado <strong>NO</strong>&nbsp; está disponible", 3e3);
        //document.getElementById('x1').style.display = 'none';
        //document.getElementById('x2').style.display = '';
        document.getElementById("loginc").value='';
      }
    }
  }
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
function enviarHTTPib ()
{
  var login = document.getElementById("usernameib").value;
  var password = document.getElementById("passwordib").value;

  if(login!="" || password!="")
  {
    var query= "login=" + login +"&password=" + password;
    http.open ("GET", "../verificar_usuario.php?" + query, true);
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

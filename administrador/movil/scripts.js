

  function actualizar(x){

    switch (x) {

      case 0:

      document.getElementById('x1').style.display = 'none';

      document.getElementById('x2').style.display = 'none';

      document.getElementById('grabar').style.display = '';

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      location.reload(true);

      break;

      case 1:

      document.getElementById('x1').style.display = 'none';

      document.getElementById('x2').style.display = 'none';

      document.getElementById('grabar').style.display = '';

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      location.reload(true);

      break;

      case 2:

      document.getElementById('x1').style.display = 'none';

      document.getElementById('x2').style.display = 'none';

      document.getElementById('grabar').style.display = '';

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      location.reload(true);

      break;

      case 3:

      document.getElementById('x1').style.display = 'none';

      document.getElementById('x2').style.display = 'none';

      document.getElementById('grabar').style.display = '';

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      location.reload(true);

      break;

      default:

      alert("alert");

    }

  }



  function mostrar(x){

    switch (x) {

      case 0:

      div=document.getElementById("wrapper2");

      div.style.display='';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';



      break;

      case 1:

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      break;

      case 2:

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='';

      div=document.getElementById("wrapper5");

      div.style.display='none';

      break;

      case 3:

      div=document.getElementById("wrapper2");

      div.style.display='none';

      div=document.getElementById("wrapper3");

      div.style.display='none';

      div=document.getElementById("wrapper4");

      div.style.display='none';

      div=document.getElementById("wrapper5");

      div.style.display='';

      break;

      default:

      alert("alert");

    }

  }





function validar(e) { // 1

    tecla = (document.all) ? e.keyCode : e.which; // 2

    if (tecla==8) return true; // 3

    patron =/[A-Za-z\s]/; // 4

    te = String.fromCharCode(tecla); // 5

    return patron.test(te); // 6

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

  function enviarHTTP01 ()

  {

    var valor = window.document.formulario_usuario01.nombre.value;

    if(valor!="")

    {

      var query= "usuario=" + valor;

      http.open ("GET", "../categoria/grabar_categoria.php?" + query, true);

      http.onreadystatechange = respuestaHTTP01;

    http.send(null); // se envia la petición

  }

}





function enviarHTTP02 ()

{

	alert("ENTRA");

	var estado = window.document.formulario_usuario02.tipo.value;

	var nombre = window.document.formulario_usuario02.nombre.value;

	alert(estado);

	alert(nombre);

	if(estado!=0 && nombre!="")

	{

		var query= "estado=" + estado +"&nombre=" + nombre;

		http.open ("GET", "ciudad/grabar_ciudad.php?" + query, true);

		http.onreadystatechange = respuestaHTTP02;

		http.send(null); // se envia la petición

	}

}



function respuestaHTTP01 ()

{

  if (http.readyState == 4)

  {

    if (http.status == 200)

    {

      var respuesta_php = http.responseText;

      if(respuesta_php=="")

      {
        Materialize.toast('Atención Registro ya existe', 3000);
      }

      else

      {
        Materialize.toast('Registro correcto', 3000);
        window.document.formulario_usuario01.nombre.value="";
        location.reload(true);
      }

    }

  }

}


function respuestaHTTP02 ()

{

  if (http.readyState == 4)

  {

    if (http.status == 200)

    {

      var respuesta_php = http.responseText;

      if(respuesta_php=="")

      {

        document.getElementById('x102').style.display = '';

        document.getElementById('x202').style.display = 'none';

      }

      else

      {

        document.getElementById('x102').style.display = 'none';

        document.getElementById('grabar02').style.display = 'none';

        document.getElementById('x202').style.display = '';



        window.document.formulario_usuario02.nombre.value="";

      }

    }

  }

}




<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
    <meta name="description" content="Material Design Mobile Template">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
    <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#222222">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- Icons -->
    <link href="css/ionicons.min.css" media="all" rel="stylesheet" type="text/css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/swipebox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.7.1.min.js"></script>

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

  var password = document.getElementById("login-psw").value;

  var cont=0;


  if(login==""){ alert("El Login Se Encuentra Vacio");cont=1; }

  if(password=="")
  { alert("El Password Se Encuentra Vacio");cont=1; }
  if(cont==0)
  {
    var query= "login=" + login +"&password=" + password;
    http.open ("GET", "../consultar_usuario.php?" + query, true);
    http.onreadystatechange = respuestaHTTP;
    http.send(null); // se envia la petición
  }
}

function respuestaHTTP ()
{

  if (http.readyState == 4)  {
    if (http.status == 200){

      var respuesta_php = http.responseText;
        if(isNaN(respuesta_php)==true)
      {
        if(respuesta_php==no_existe){
        alert('no_existe');
      }
        if(respuesta_php==clave_invalida){
        alert('clave_invalida');
      }
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

    <!-- Main Container -->
    <div id="main" class="main">

      <!-- Toolbar -->
      <div id="toolbar" class="primary-color-head tool-login">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="ion-android-menu toolbar"></i>
        </div>
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="page fullscreen grey lighten-4">

        <div class="login-form z-depth-1">
          <h1>Inicio de sesión</h1>
          <div class="input-field">
            <i class="ion-android-contact prefix"></i>
            <input class="validate" name="login" id="login" type="text">
            <label for="login">Usuario</label>
          </div>

          <div class="input-field" style="margin-bottom:20px;">
            <i class="ion-android-lock prefix"></i>
            <input class="validate" id="login-psw" name="password" type="password">
            <label for="login-psw">Password</label>
          </div>

          <a class="waves-effect waves-light btn-large accent-color block m-b-20 animated bouncein delay-2" onclick="enviarHTTP()">Entrar</a>
          <!--<span>Don't have an account? <a class="primary-text" href="signup.html">Sign Up</a></span>-->
        </div>

      </div>
      <!-- End of Page Contents -->

      <!-- Sidebars -->
      <!-- Left Sidebar -->


      <ul id="slide-out-left" class="side-nav collapsible">
        <li class="sidenav-avatar bg-material">
          <div class="opacity-overlay-gradient"></div>
          <div class="bottom">
           <!-- <img src="img/user.jpg" alt="" class="avatar">-->
            <!-- Dropdown Trigger -->
            <span class="dropdown-button waves-effect waves-light" data-activates="dropdown1"><? echo $login; ?><i class="ion-android-arrow-dropdown right"></i></span>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!"> Hola </a></li>

              <li class="divider"></li>
              <li><a href="#!">Configurar <i class="ion-ios-gear"></i></a></li>
            </ul>
          </div>
        </li>

  <li><a href="../../index.php" class="waves-effect"><i class="ion-android-exit"></i> Volver</a></li>

      </ul>

    <!-- End of Main Container -->

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.1.0.min.js"></script>
    <script src="js/helper.js"></script>
    <script src="js/vendor/HeadsUp.js"></script>
    <script src="js/vendor/jquery.smoothState.js"></script>
    <script src="js/vendor/chart.min.js"></script>
    <script src="js/vendor/jquery.mixitup.min.js"></script>
    <script src="js/vendor/jquery.swipebox.min.js"></script>
    <script src="js/vendor/masonry.min.js"></script>
    <script src="js/vendor/swiper.min.js"></script>
    <script src="js/vendor/materialize.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<?

require_once('../conexion/conexion.php');

?>
<?php
session_start();
$idusuario = $_SESSION["idusuario"];
$nombre_usuario = $_SESSION["nombre_usuario"];
$apellido_usuario = $_SESSION["apellido_usuario"];
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
        <meta charset="utf-8">
    <title>Todo en Construcción</title>
    <meta name="description" content="Todo en Construcción">
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

    <!-- SEO: If mobile URL is different from desktop URL, add a canonical link to the desktop page -->
    <!--
    <link rel="canonical" href="http://www.example.com/" >
    -->

    <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
    <!--
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="">
    -->

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

    <script type="text/javascript">
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



      function enviarHTTPlogout ()

{
    http2.open ("GET", "../logout.php", true);
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
  </head>

  <body>


    <!-- Main Container -->
    <div id="main" class="main">

      <!-- Toolbar -->
     <div id="toolbar" class="primary-color-head z-depth-1">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="ion-android-menu"></i>
        </div>
        <h1 class="title">Todo en Construcción</h1>
        <div class="open-right" id="open-right" data-activates="slide-out">
          <i class="ion-android-search"></i>
        </div>
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="page animated fadein">
        <!-- Slider -->

        <!-- End of Slider -->

        <!-- First Section -->
        <div class="section center">
          <i class="ion-aperture infograph"></i>
          <h2 class="heading"><a href="agregar_venta.php">Agregar <br> Producto para Vender</a></h2>
          <p>Publica un producto nuevo o usado</p>
        </div>

        <!-- Second Section -->
        <div class="section center grey lighten-5">
          <i class="ion-code-working infograph"></i>
          <h2 class="heading"><a href="preguntas_responder.php">Responde <br> las preguntas de tus interesados</a></h2>
          <p>Respondele rápido y sé amable</p>
        </div>

        <!-- Third Section -->
        <div class="section center">
          <i class="ion-android-color-palette infograph"></i>
          <h2 class="heading">Agregar <br> Servicios Profesionales</h2>
          <p>Ofrezca sus servicios aqui.</p>
        </div>




        <div class="clr"></div> <!-- clear for the images floats -->

        <!-- Newsletter -->


        <!-- Footer -->
        <footer class="page-footer primary-color">
          <div class="section center">
            <h2 class="heading white-text">Todo en Construcción</h2>
            <p class="center-align grey-text text-lighten-4">Compra y ofrece tus servicios.</p>
            <div class="footer-icons">
              <i class="ion-social-facebook m-10 white-text"></i>
              <i class="ion-social-twitter m-10 white-text"></i>
              <i class="ion-social-pinterest m-10 white-text"></i>
              <i class="ion-social-instagram m-10 white-text"></i>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
              <span>Bien Hecho <i class="ion-ios-heart"></i> en Venezuela</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- End of Page Contents -->

      <!-- Sidebars -->
      <!-- Left Sidebar -->
      <ul id="slide-out-left" class="side-nav collapsible">

        <?

        if($idusuario!="")

        { ?>
        <li class="sidenav-avatar bg-material">
          <div class="opacity-overlay-gradient"></div>
          <div class="bottom">
           <!-- <img src="img/user.jpg" alt="" class="avatar">-->
            <!-- Dropdown Trigger -->
            <span class="dropdown-button waves-effect waves-light" data-activates="dropdown1"><? echo $nombre_usuario; ?><i class="ion-android-arrow-dropdown right"></i></span>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!"> Hola </a></li>
              <li class="divider"></li>
              <li><a href="mi_cuenta.php?idusuario=+<?=$idusuario;?>">&nbsp Cuenta</a></li>
              <li><a onClick="enviarHTTPlogout()">Cerrar Sesión <i class="ion-ios-gear"></i></a></li>
            </ul>
          </div>
        </li>
        <?
         }
         else
         {
         ?>
          <li class="sidenav-avatar bg-material">
          <div class="opacity-overlay-gradient"></div>
          <div class="bottom">
           <!-- <img src="img/user.jpg" alt="" class="avatar">-->
            <!-- Dropdown Trigger -->
            <span class="dropdown-button waves-effect waves-light" data-activates="dropdown1">&nbspIngresar&nbsp<i class="ion-android-arrow-dropdown right"></i></span>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="login.php"> Ingresar </a></li>
              <li class="divider"></li>
              <li><a href="../mi_cuenta.php?idusuario=+<?=$idusuario;?>">&nbsp Cuenta</a></li>
              <li><a href='registrar.php'>Registrarse&nbsp<i class="ion-ios-gear"></i></a></li>
            </ul>
          </div>
        </li>

          <? } ?>

        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-home"></i>Inicio<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
        </li>

       <li><a href="categoria.php" class="waves-effect"><i class="ion-android-map"></i> Galerías</a></li>
        <li><a href="ciudades.php" class="waves-effect"><i class="ion-android-map"></i> Noticias</a></li>
         <li><a href="usuarios.php" class="waves-effect"><i class="ion-android-map"></i> Contacto</a></li>
       <!-- <li><a href="registrar.php" class="waves-effect"><i class="ion-android-map"></i> Registrarse</a></li>-->



      </ul>

      <!-- Right Sidebar -->
      <ul id="slide-out" class="side-nav">
        <li class="sidenav-header">
          <!-- Srearch bar -->
          <nav>
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label for="search"><i class="ion-android-search"></i></label>
                  <i class="ion-android-close"></i>
                </div>
              </form>
            </div>
          </nav>
        </li>
        <!-- Tabs -->
        <li>
          <ul class="tabs">
            <li class="tab col s3"><a href="#sidebar1">Redes Sociales</a></li>
            <!--<li class="tab col s3"><a href="#sidebar2" class="active">Chat</a></li>-->
          </ul>
        </li>
        <li id="sidebar1" class="p-20">
          <!-- Twitter -->
          <div class="twitter">
            <h6 class="follow-us"><i class="ion-social-twitter"></i> Siguenos en Twitter</h6>

          </div>
          <div class="facebook">
            <h6 class="follow-us"><i class="ion-social-facebook"></i> Siguenos en Facebook</h6>

          </div>
          <div class="facebook">
            <h6 class="follow-us"><i class="ion-social-instagram"></i> Siguenos en Instagram</h6>

          </div>

        </li>

      </ul>
      <!-- End of Sidebars -->

    </div>
    <!-- End of Main Container -->

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.1.0.min.js"></script>
    <script src="js/helper.js"></script>
    <script src="js/vendor/HeadsUp.js"></script>
    <script src="js/vendor/chart.min.js"></script>
    <script src="js/vendor/jquery.mixitup.min.js"></script>
    <script src="js/vendor/jquery.swipebox.min.js"></script>
    <script src="js/vendor/masonry.min.js"></script>
    <script src="js/vendor/swiper.min.js"></script>
    <script src="js/vendor/materialize.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

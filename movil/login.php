<?
require_once('../conexion/conexion.php');
?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
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

  </head>

  <body>

    <!-- Main Container -->
    <div id="main" class="main">

      <!-- Toolbar -->
      <div id="toolbar" class="primary-color-head tool-login">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="ion-android-menu toolbar  "></i>
        </div>
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="page fullscreen grey lighten-4">

        <div class="login-form z-depth-1">
          <h1>Inicio de sesión</h1>
          <div class="input-field">
            <i class="ion-android-contact prefix"></i>
            <input class="validate" name="login" id="usernameib" type="text">
            <label for="login">Usuario</label>
          </div>

          <div class="input-field" style="margin-bottom:20px;">
            <i class="ion-android-lock prefix"></i>
            <input class="validate" id="passwordib" name="password" type="password">
            <label for="login-psw">Password</label>
          </div>

          <a class="waves-effect waves-light btn-large accent-color block m-b-20 animated bouncein delay-2" onclick="enviarHTTPib()">Entrar</a>
          <!--<span>Don't have an account? <a class="primary-text" href="signup.html">Sign Up</a></span>-->
        </div>

      </div>
      <!-- End of Page Contents -->

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

        <li>

          <div class="collapsible-header waves-effect">

            <i class="ion-android-home"></i>Inicio<span class="more"><i class="ion-ios-arrow-right"></i></span>

          </div>



        <!--  <div class="collapsible-body">

            <ul class="collapsible">

              <li>

                <a href="index.html">Classic</a>

                <a href="index-sliced.html">Sliced</a>

                <a href="index-slider.html">Slider</a>

                <a href="index-drawer.html">Drawer</a>

                <a href="index-walkthrough.html">Walkthrough</a>

              </li>

            </ul>

          </div>-->

        </li>

 <li><a href="categoria.php" class="waves-effect"><i class="ion-android-map"></i> Categorías</a></li>

  <li><a href="ciudades.php" class="waves-effect"><i class="ion-android-map"></i> Ciudades</a></li>

   <li><a href="estados.php" class="waves-effect"><i class="ion-android-map"></i> Estados</a></li>

   <li><a href="usuarios.php" class="waves-effect"><i class="ion-android-map"></i> Usuarios</a></li>
        <li>

          <div class="collapsible-header waves-effect">

            <i class="ion-android-exit"></i>Salir<span class="more"><i class="ion-ios-arrow-right"></i></span>

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
    <script src="js/vendor/jquery.smoothState.js"></script>
    <script src="js/vendor/chart.min.js"></script>
    <script src="js/vendor/jquery.mixitup.min.js"></script>
    <script src="js/vendor/jquery.swipebox.min.js"></script>
    <script src="js/vendor/masonry.min.js"></script>
    <script src="js/vendor/swiper.min.js"></script>
    <script src="js/vendor/materialize.min.js"></script>
    <script src="js/main.js"></script>
    <script type='text/javascript' src='scripts.js'></script>
  </body>
</html>

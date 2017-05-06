
<?php
session_start();
$usuario = $_SESSION["s_username"];
$tipouser = $_SESSION["tipouser"];
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Todo en Construcción</title>
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
  </head>

  <body>

    <!-- Main Container -->
    <div id="main" class="main">

      <!-- Toolbar -->
      <div id="toolbar" class="nav-material">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="ion-android-menu"></i>
        </div>
        <h1 class="title none">Ciudades</h1>
        <!--<div class="open-right" id="open-right" data-activates="slide-out">
          <i class="ion-android-person"></i>
        </div>-->
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="animated fadeinup">
  <?php

                    session_start();

                    $idtipo=$_SESSION["idtipo"];

                    $login=$_SESSION["login"];

                    ?>

                    <?php

                    session_start();

                    $usuario = $_SESSION["s_username"];

                    $tipouser = $_SESSION["tipouser"];

                    ?>
        <!-- Hero Header -->
        <div class="hero-material animated fadeindown">
          <div class="parallax primary-color-head">

            <div class="fixed-action-btn floating-button animated bouncein delay-3 horizontal click-to-toggle">
              <a class="waves-effect waves-light btn modal-trigger btn-floating btn-large accent-color" href="#modal1">

              <i class="ion-android-add"></i>

              </a>
             <!-- <ul>
                <li><a class="btn-floating red"><i class="ion-android-home"></i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="ion-android-star"></i></a></li>
                <li><a class="btn-floating green"><i class="ion-android-attach"></i></a></li>
                <li><a class="btn-floating blue"><i class="ion-android-share-alt"></i></a></li>
              </ul>-->
            </div>
            <div class="banner-title" style="color:gray">HOLA <? echo $login; ?></div>
          </div>
        </div>
   <div class="upnext">
          <h5></h5>
           <?
            include_once('../../conexion/conexion.php');
            $sql2 = "SELECT idciudad,nombre_ciudad,estado_idestado,suspendido FROM ciudad";
            $result2 = $db->query($sql2);
            ?>
            <?
            while ($query_result = $result2->fetch_array())
            {
            $idciudad= $query_result['idciudad'];
            $nombre_ciudad= $query_result['nombre_ciudad'];
            $estado_idestado= $query_result['estado_idestado'];
            $suspendido= $query_result['suspendido'];
           echo "<div class='next-song animated fadeinright delay-1'>";
           echo "<span>$idciudad</span>";
           echo "<span>$nombre_ciudad&nbsp|&nbsp</span>";
           $sql60 = "SELECT nombre_estado FROM estado WHERE idestado='$estado_idestado' LIMIT 1";
           $result60 = $db->query($sql60);
           $fila60 = $result60 -> fetch_array();
           echo "<span>$fila60[nombre_estado]&nbsp|&nbsp</span>";
           echo "<span>$suspendido</span>";
           echo "<a href='modificar_usuarios.php?codigo=+<?=$idciudad;?>'  target='_blank' onClick='window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;' class='remove' title='Editar ésta Ciudad'><i class='ion-ios-more'></i></a>";
          echo"  </div>";
          }
          ?>

        </div>
        <!-- Article Content -->
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
  <li><a href="estados.php" class="waves-effect"><i class="ion-android-map"></i> Estados</a></li>
   <li><a href="usuarios.php" class="waves-effect"><i class="ion-android-map"></i> Usuarios</a></li>



        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-exit"></i>Salir<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>

        </li>

      </ul>

    <!-- End of Main Container -->
<!-- Modal Trigger -->
<?
//require_once('../conexion/conexion.php');
  $sql2 = "SELECT idestado,nombre_estado FROM estado WHERE suspendido_estado='' ORDER BY nombre_estado ASC ";
  $result2 = $db->query($sql2);
?>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
    <form name="formulario_usuario02">
    <h4>Agregar Ciudad</h4>
    <p></p>
      <label>Seleccione el Estado</label>
            <select name="tipo" class="browser-default">
            <option value="0" disabled selected>Seleccione ....</option>
            <?
            while ($query_result = $result2->fetch_array())
            {
            $idestado= $query_result['idestado'];
            $nombre_estado= $query_result['nombre_estado'];
            ?><option <? echo"value='$idestado'"; ?>><? echo"$nombre_estado"; ?></option><?
            }
            ?>
            </select>
<p></p>
    <div class="input-field">



          <input id="nombre" type="text" class="validate">
          <label for="first_name">Ingrese Nombre de la Ciudad</label>

          <div id="grabar01" class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" onclick="enviarHTTP02()">Agregar</a>
          </div>


</div>
</form>
</div>
</div>

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

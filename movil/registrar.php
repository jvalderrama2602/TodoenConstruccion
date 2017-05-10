<!DOCTYPE html>

<html class="no-js">

  <head>

    <meta charset="utf-8">

    <title>Agregar usuario</title>

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


  </head>



  <body>



    <!-- Main Container -->

    <div id="main" class="main">



      <!-- Toolbar -->

      <div id="toolbar" class="primary-color-head z-depth-1">

        <div class="open-left" id="open-left" data-activates="slide-out-left">

          <i class="ion-android-menu"></i>

        </div>

      <h1 class="title">Nuevo Usuario</h1>

        <div class="open-right" id="open-right" data-activates="slide-out">

         <!-- <i class="ion-android-person"></i>-->

        </div>

      </div>

      <!-- End of Toolbar -->



      <!-- Page Contents -->

<div class="page animated fadeinup">



        <!-- Form Inputs -->

<div class="form-inputs p-20">

          <h4 class="shipping-address">Crear Cuenta</h4>



          <div class="input-field">

            <input id="loginc" type="text" class="validate" required="required" onBlur="enviarHTTP20()">

            <label for="address">Usuario</label>

          </div>



          <div class="input-field">

            <input id="passc" type="password" required="required">

            <label for="apt">Password</label>

          </div>



            <div class="input-field">

              <input id="nombrec" type="text" class="validate" required="required">

              <label for="first_name">Nombre</label>

            </div>



          <div class="input-field">

            <input id="apellidoc" type="text" class="validate" required="required">

            <label for="city">Apellido</label>

          </div>



          <div>

          <label for="city">Cedula de Identidad</label>

          <input type="radio" name="nac" id="V" value="V" checked />V&nbsp;&nbsp;

          <input type="radio" name="nac" id="E" value="E" />E&nbsp;&nbsp;

          <input class="input-text" type="number" name="ci" id="ci" size="20"  maxlength="9" placeholder="123456789" onkeypress="return permitidos_ci(event)"/>

          </div>

          <div>

          <label>Teléfono Celular</label>

          <select class="browser-default" name="cod_cel" id="cod_cel" required>

            <option value="" disabled selected>Seleccione código</option>

            <option value="0412">0412</option>

            <option value="0414">0414</option>

            <option value="0416">0416</option>

            <option value="0424">0424</option>

          </select>

          </div>

&nbsp;&nbsp;

          <div class="input-field">

            <input id="num_cel" type="number" class="validate" required="required" size="12" maxlength="7" placeholder="1234567" onkeypress="return permitidos_num(event);">

            <label for="city"></label>

          </div>

          <div>

          <label>Teléfono Local</label><br>

          <input type="number" name="cod_local" id="cod_local" size="6" maxlength="4" placeholder="0212" onkeypress="return permitidos_cod(event);"/>&nbsp;

          <input type="number" name="num_local" id="num_local" size="12" maxlength="7" placeholder="1234567" onkeypress="return permitidos_loc(event);" />

          </div>

          <div>
          <label>Ubicación</label>

          <select class="browser-default" name="category" id="category" required>
            <?
            require_once('../conexion/conexion.php');
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
          <div>
          <label>Ciudad</label>
          <select class="browser-default" name="subcategory" id="subcategory" required>
          <option value="" disabled selected>Seleccione Ciudad</option>
          </select>
          </div>
            <div class="input-field">
            <input id="emailc" type="email" class="validate" required="required" size="12">
            <label for="city">Email</label>

          </div>

          <button class="waves-effect waves-light btn-large primary-color block" onclick="validacion()">Crear Cuenta</button>

</div>

</div>

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
    <script type='text/javascript' >
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
  </body>

</html>


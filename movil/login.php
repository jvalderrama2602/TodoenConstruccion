

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
      <div id="toolbar" class="primary-color tool-login">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="ion-android-menu white-text"></i>
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
            <img src="img/user.jpg" alt="" class="avatar">
            <!-- Dropdown Trigger -->
            <span class="dropdown-button waves-effect waves-light" data-activates="dropdown1">heyfromjhon@email.com<i class="ion-android-arrow-dropdown right"></i></span>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">hellojhon@email.com</a></li>
              <li><a href="#!">heyfromjhon@email.com</a></li>
              <li class="divider"></li>
              <li><a href="#!">Settings <i class="ion-ios-gear"></i></a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-home"></i>Home<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="index.html">Classic</a>
                <a href="index-sliced.html">Sliced</a>
                <a href="index-slider.html">Slider</a>
                <a href="index-drawer.html">Drawer</a>
                <a href="index-walkthrough.html">Walkthrough</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-exit"></i>Layout<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="material.html">Material</a>
                <a href="left-sidebar.html">Left</a>
                <a href="right-sidebar.html">Right</a>
                <a href="dual-sidebar.html">Dual</a>
                <a href="blank.html">Blank</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-document"></i>Pages<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="article.html">Article</a>
                <a href="about.html">About</a>
                <a href="event.html">Event</a>
                <a href="project.html">Project</a>
                <a href="player.html">Music Player</a>
                <a href="todo.html">ToDo</a>
                <a href="category.html">Category</a>
                <a href="product.html">Product</a>
                <a href="checkout.html">Checkout</a>
                <a href="search.html">Search</a>
                <a href="faq.html">Faq</a>
                <a href="coming-soon.html">Coming Soon</a>
                <a href="404.html">404</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-apps"></i>App<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="calendar.html">Calendar</a>
                <a href="profile.html">Profile</a>
                <a href="timeline.html">Timeline</a>
                <a href="chat.html">Chat</a>
                <a href="login.html">Login</a>
                <a href="signup.html">Sign Up</a>
                <a href="forgot.html">Password</a>
                <a href="lockscreen.html">Lockscreen</a>
                <a href="chart.html">Chart</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-list"></i>Blog<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="blog.html">Classic</a>
                <a href="blog-masonry.html">Masonry</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-image"></i>Gallery<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="gallery-filter.html">Filter</a>
                <a href="gallery-masonry.html">Masonry</a>
                <a href="gallery-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-camera"></i>Portfolio<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="portfolio-filter.html">Filter</a>
                <a href="portfolio-masonry.html">Masonry</a>
                <a href="portfolio-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="shop.html" class="waves-effect"><i class="ion-android-playstore"></i> Shop</a></li>
        <li><a href="news.html" class="waves-effect"><i class="ion-social-rss"></i> News</a></li>
        <li><a href="#!" class="waves-effect"><i class="ion-wand"></i>UI Kit (Coming Soon)</a></li>
        <li><a href="contact.html" class="waves-effect"><i class="ion-android-map"></i> Contact</a></li>
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
            <li class="tab col s3"><a href="#sidebar1">Social</a></li>
            <li class="tab col s3"><a href="#sidebar2" class="active">Chat</a></li>
          </ul>
        </li>
        <li id="sidebar1" class="p-20">
          <!-- Twitter -->
          <div class="twitter">
            <h6 class="follow-us"><i class="ion-social-twitter"></i> Follow us on Twitter</h6>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href="#">#tempor</a>.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in <a href="#">#voluptate</a> culpa qui officia deserunt mollit anim.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>At vero eos et accusamus et iusto odio <a href="#">#dignissimos</a> <a href="#">#ducimus</a> qui blanditiis praesentium.</p>
            </div>
          </div>
          <!-- Facebook -->
          <div class="facebook">
            <h6 class="follow-us">Notifications</h6>
            <div class="face-notification">
              <img src="img/user2.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Sent you a message</span>
                <span class="small">Today at 16:48</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="img/user.jpg" alt="" class="cricle">
              <div>
                <p>Lara Connors</p>
                <span>Post a photo with you</span>
                <span class="small">Today at 14:26</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="img/user3.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Post something...</span>
                <span class="small">Yesterday at 03:19</span>
              </div>
            </div>
          </div>

        </li>
        <li id="sidebar2" class="p-20">
          <!-- Chat -->
          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Mike Green</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user2.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Lora Bell</p>
              <span>6 New messages</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user3.jpg" alt="" class="cricle">
              <span class="dot orange"></span>
            </div>
            <div class="chat-message">
              <p>Tony Lee</p>
              <span>Away from keyboard.</span>
              <span class="small">Away</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user4.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Jim Connor</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user5.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Sara Lower</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Mick Pole</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user3.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>James Tree</p>
              <span>Awaiting your reply.</span>
              <span class="small">online</span>
            </div>
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
  </body>
</html>

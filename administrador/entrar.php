<?php
session_start();
$usuario = $_SESSION["s_username"];
$tipouser = $_SESSION["tipouser"];
?>

<!doctype html>
<html>
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Administración</title>
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel='stylesheet' href='../css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='../css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='../css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='../css/elegant-icon.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='../css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='../css/commerce.css' type='text/css' media='all'/>

</head>

<body>

  <!--MENU DEL MOVIL-->
    <div class="offcanvas open">
      <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
          <a class="offcanvas-user-wishlist-link" href="menu_mantenimiento.php" target="centro1" >
            <i class="fa fa-heart-o"></i>Mantenimiento
          </a>
          <a class="offcanvas-user-account-link" href="logout.php">
            <i class="fa fa-user"></i>Salir
          </a>
        </div>
        <nav class="offcanvas-navbar">
          <ul class="offcanvas-nav">
            <li><a href="../index.php">Inicio</a>
            </li>
            <!--<li><a href="#">Galerias</a>
            </li><li><a href="#">Noticias</a></li>
            <li><a href="#">Blog</a></li>-->  
          </ul>
        </nav>
      </div>
    </div>
<!--AQUI TERMINA EL MENU DEL MOVIL -->
    <div id="wrapper" class="wide-wrap">
      <div class="offcanvas-overlay"></div>
      <header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
        <div class="topbar">
          <div class="container topbar-wap">
            <div class="row">
              <div class="col-sm-6 col-left-topbar">
                <div class="left-topbar">
                   Administración
                  <a href="#"><i class="fa fa-long-arrow-right"></i></a>&nbsp;
                  Salir
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
                
                   
                
                
              </div>
              <div class="col-sm-6 col-right-topbar">
             
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-container" >
          <div class="navbar navbar-default navbar-scroll-fixed">
            <div class="navbar-default-wrap" style="background-color: #FFFF00">
              <div class="container">
                <div class="row">
                  <div class="navbar-default-col">
                    <div class="navbar-wrap">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                          <span class="sr-only">Navegación</span>
                          <span class="icon-bar bar-top"></span>
                          <span class="icon-bar bar-middle"></span>
                          <span class="icon-bar bar-bottom"></span>
                        </button>
                    
                        <a class="navbar-brand" href="./">
                          <img class="logo" alt="todo" src="../imagen/logo.png">
                          <img class="logo-fixed" alt="todo" src="../imagen/logo.png">
                          <img class="logo-mobile" alt="todo" src="../imagen/logo.png">
                        </a>
                      </div>
                      <nav class="collapse navbar-collapse primary-navbar-collapse">

                        <ul class="nav navbar-nav primary-nav">
                    
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
                        <? echo $login; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                          <li class="current-menu-item menu-item-has-children dropdown">
                            <a href="categoria/todos_categoria.php" target="centro1" class="dropdown-hover">
                              <span class="underline">Categoría</span> <span class="caret"></span>
                            </a>
                          </li>
                           <li class="current-menu-item menu-item-has-children dropdown">
                            <a href="ciudad/todos_ciudad.php" target="centro1" class="dropdown-hover">
                              <span class="underline">Ciudad</span> <span class="caret"></span>
                            </a>
                          </li>
                           <li class="current-menu-item menu-item-has-children dropdown">
                            <a href="estado/todos_estados.php" target="centro1" class="dropdown-hover">
                              <span class="underline">Estados</span> <span class="caret"></span>
                            </a>
                          </li>
                          <li class="current-menu-item menu-item-has-children dropdown">
                            <a href="super_usuario/todo_usuario.php" target="centro1" class="dropdown-hover">
                              <span class="underline">Usuarios</span> <span class="caret"></span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <div class="header-right">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </header>
      

     
<div class="container" height="600px">
  
<iframe name="centro1" width="1024px" scrolling="no" frameborder="0"></iframe>

</div>
    <script type='text/javascript' src='../js/jquery.js'></script>
    <script type='text/javascript' src='../js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../js/easing.min.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/superfish-1.7.4.min.js'></script>
    <script type='text/javascript' src='../js/script.js'></script>
</body>
</html>
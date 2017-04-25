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

                      <nav class="collapse navbar-collapse primary-navbar-collapse">



                        <ul class="nav navbar-nav primary-nav">                  

                         
                        
                        <li class="current-menu-item menu-item-has-children dropdown">

                            <a href="#" class="dropdown-hover">

                              <span class="underline"><? echo $login; ?></span> <span class="caret"></span>

                            </a>

                          </li>

                          <li class="current-menu-item menu-item-has-children dropdown">

                            <a href="javascript:mostrar(0)" class="dropdown-hover">

                              <span class="underline">Categoría</span> <span class="caret"></span>

                            </a>

                          </li>

                           <li class="current-menu-item menu-item-has-children dropdown">

                            <a href="javascript:mostrar(1)" class="dropdown-hover">

                              <span class="underline">Ciudad</span> <span class="caret"></span>

                            </a>

                          </li>

                           <li class="current-menu-item menu-item-has-children dropdown">

                            <a href="javascript:mostrar(2)"  class="dropdown-hover">

                              <span class="underline">Estados</span> <span class="caret"></span>

                            </a>

                          </li>

                          <li class="current-menu-item menu-item-has-children dropdown">

                            <a href="javascript:mostrar(3)"  class="dropdown-hover">

                              <span class="underline">Usuarios</span> <span class="caret"></span>

                            </a>

                          </li>

                        </ul>

                      </nav>

                      <div class="header-right"></div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

           

          </div>

        </div>

      </header>

  </div>   
<!--comienzo query de categorías-->
<?
include_once('../conexion/conexion.php');

  $sql2 = "SELECT idcategoria,nombre_categoria,suspendido_categoria FROM categoria";

  $result2 = $db->query($sql2);

?>

  <div id="wrapper2" style="display:none" class="wide-wrap ">

      <div class="offcanvas-overlay"></div>
      <div class="content-container">

        <div class="container">

          <div class="row">

            <div class="col-md-12">

              <div class="main-content">
  
                <div class="commerce">

                  <form>

                    <table class="table shop_table cart">

                      <thead>

                        <tr>

                          <th class="product-remove hidden-xs">Acción</th>

                          <th class="product-name">Código</th>

                          <th class="product-price text-center">Nombre</th>

                          <th class="product-quantity text-center">Status</th>

                          <th class="product-subtotal text-center hidden-xs"></th>

                        </tr>

                      </thead>

                      <tbody>

                              <?  

                              while ($query_result = $result2->fetch_array())

                              {

                                $idestado= $query_result['idcategoria'];

                                $nombre_estado= $query_result['nombre_categoria'];

                                $suspendido= $query_result['suspendido_categoria'];

                                

                                echo "<tr class='cart_item'> \n

                                <td class='product-remove hidden-xs'>\n

                                <a href='modificar_usuarios.php?codigo=+<?=$idestado;?>'  target='_blank' onClick='window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;' class='remove' title='Remove this item'>&times;</a>\n

                                </td>";





                                echo "<td class='product-subtotal hidden-xs text-center'>\n

                                  <span class='amount'>$idestado</span>\n

                                  </td> \n";

                                echo "<td class='product-name'> \n

                                  <a href='#'>$nombre_estado</a> \n

                                  <dl class='variation'> \n

                                  </td> \n";

                                echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$suspendido</span>\n

                                  </td> \n";

                                

                              ?>        

                              </tr>

                              <?

                              }

                              ?>                

                      </tbody>

                    </table>

                  </form>

              <div class="form-row">                    
 <a href="../administrador/categoria/agregar_categoria.php" class="btn btn-outline rounded">Agregar Categoría</a>
</div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
<!-- aqui termina query de categorías -->

<!-- aqui termina query de ciudades -->


<?
  
  $sql2 = "SELECT idciudad,nombre_ciudad,estado_idestado,suspendido FROM ciudad";
  $result2 = $db->query($sql2);
?>

  <div id="wrapper3" style="display:none" class="wide-wrap ">

      <div class="offcanvas-overlay"></div>
      <div class="content-container">

        <div class="container">

          <div class="row">

            <div class="col-md-12">

              <div class="main-content">
  
                <div class="commerce">

                  <form>

                    <table class="table shop_table cart">

                      <thead>

                        <tr>

                          <th class="product-remove hidden-xs">Acción</th>

                          <th class="product-name">Código</th>

                          <th class="product-price text-center">Ciudad</th>

                          <th class="product-quantity text-center">Estado</th>

                          <th class="product-subtotal text-center hidden-xs">Status</th>

                        </tr>

                      </thead>

                      <tbody>


                              <?  
                              while ($query_result = $result2->fetch_array())
                              {
                                $idciudad= $query_result['idciudad'];
                                $nombre_ciudad= $query_result['nombre_ciudad'];
                                $estado_idestado= $query_result['estado_idestado'];
                                $suspendido= $query_result['suspendido'];


                                echo "<tr class='cart_item'> \n

                                <td class='product-remove hidden-xs'>\n

                                <a href='modificar_usuarios.php?codigo=+<?=$idciudad;?>' target='_blank' onClick='window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;' class='remove' title='Remove this item'>&times;</a>\n

                                </td>";

                                echo "<td class='product-subtotal hidden-xs text-center'>\n

                                  <span class='amount'>$idciudad</span>\n

                                  </td> \n";

                                echo "<td class='product-name'> \n

                                  <a href='#'>$nombre_ciudad</a> \n

                                  <dl class='variation'> \n

                                  </td> \n";


                                 $sql60 = "SELECT nombre_estado FROM estado WHERE idestado='$estado_idestado' LIMIT 1";
                                 $result60 = $db->query($sql60);
                                 $fila60 = $result60 -> fetch_array();


                                echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$fila60[nombre_estado]</span>\n

                                  </td> \n";

                                echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$suspendido</span>\n

                                  </td> \n";

                              ?>
             

                              </tr>

                              <?

                              }

                              ?>                

                      </tbody>

                    </table>

                  </form>

              <div class="form-row">                    
 <a href="../administrador/ciudad/agregar_ciudad.php" class="btn btn-outline rounded">Agregar Ciudad</a>
</div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

<!-- aqui termina ciudades -->

<!-- comienza estados -->


<? 
  $sql2 = "SELECT idestado,nombre_estado,suspendido_estado FROM estado";
  $result2 = $db->query($sql2);
?>

  <div id="wrapper4" style="display:none" class="wide-wrap ">

      <div class="offcanvas-overlay"></div>
      <div class="content-container">

        <div class="container">

          <div class="row">

            <div class="col-md-12">

              <div class="main-content">
  
                <div class="commerce">

                  <form>

                    <table class="table shop_table cart">

                      <thead>

                        <tr>

                          <th class="product-remove hidden-xs">Acción</th>

                          <th class="product-name">Código</th>

                          <th class="product-price text-center">Nombre</th>

                          <th class="product-quantity text-center">Status</th>

                          <th class="product-subtotal text-center hidden-xs"></th>

                        </tr>

                      </thead>

                      <tbody>

                                <?  
                                while ($query_result = $result2->fetch_array())
                                {
                                  $idestado= $query_result['idestado'];
                                  $nombre_estado= $query_result['nombre_estado'];
                                  $suspendido= $query_result['suspendido_estado'];

                           

                                echo "<tr class='cart_item'> \n

                                <td class='product-remove hidden-xs'>\n

                                <a href='modificar_usuarios.php?codigo=+<?=$idestado;?>' target='_blank' onClick='window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;' class='remove' title='Remove this item'>&times;</a>\n

                                </td>";

                                echo "<td class='product-subtotal hidden-xs text-center'>\n

                                  <span class='amount'>$idestado</span>\n

                                  </td> \n";

                                echo "<td class='product-name'> \n

                                  <a href='#'>$nombre_estado</a> \n

                                  <dl class='variation'> \n

                                  </td> \n";


  

                                echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$suspendido</span>\n

                                  </td> \n";

                              ?>
             

                              </tr>

                              <?

                              }

                              ?>                

                      </tbody>

                    </table>

                  </form>

              <div class="form-row">                    
 <a href="../administrador/estado/agregar_estados.php" class="btn btn-outline rounded">Agregar Estado</a>
</div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

<!-- TERMINA LOS ESTADOS -->

<?php

?>



</table>






 <div id="wrapper5" style="display:none" class="wide-wrap ">

      <div class="offcanvas-overlay"></div>
      <div class="content-container">

        <div class="container">

          <div class="row">

            <div class="col-md-12">

              <div class="main-content">
  
                <div class="commerce">

                  <form>

                    <table class="table shop_table cart">

                      <thead>

                        <tr>

                          <th class="product-remove hidden-xs">Acción</th>

                          <th class="product-name">Código</th>

                          <th class="product-price text-center">Nombre</th>

                          <th class="product-quantity text-center">Apellido</th>

                          <th class="product-subtotal text-center hidden-xs">Status</th>

                        </tr>

                      </thead>

                      <tbody>

                                <?
                                $sql2 = "SELECT idmantenimiento_usuario,nombre,apellido,suspendido FROM mantenimiento_usuario ";
                                $result2 = $db->query($sql2);
                                
                              while ($query_result = $result2->fetch_array())
                              {
                                $id_usuario= $query_result['idmantenimiento_usuario'];
                                $nombre= $query_result['nombre'];
                                $apellido= $query_result['apellido'];
                                $suspendido= $query_result['suspendido'];
                                
                                echo "<tr class='cart_item'> \n

                                <td class='product-remove hidden-xs'>\n

                                <a href='modificar_usuarios.php?codigo=+<?=$id_usuario;?>' target='_blank' onClick='window.open(this.href, this.target,'width=1130,height=650,scrollbars=yes,top=60,left=90,menubar=NO,titlebar=NO'); return false;' class='remove' title='Remove this item'>&times;</a>\n

                                </td>";

                                echo "<td class='product-subtotal hidden-xs text-center'>\n

                                  <span class='amount'>$id_usuario</span>\n

                                  </td> \n";

                                echo "<td class='product-name'> \n

                                  <a href='#'>$nombre</a> \n

                                  <dl class='variation'> \n

                                  </td> \n";


  

                                echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$apellido</span>\n

                                  </td> \n";

                                  echo "<td class='product-price text-center'>\n

                                  <span class='amount'>$suspendido</span>\n

                                  </td> \n";

                              ?>
             

                              </tr>

                              <?

                              }

                              ?>                

                      </tbody>

                    </table>

                  </form>

              <div class="form-row">                    
 <a href="../administrador/super_usuario/agregar.php" class="btn btn-outline rounded">Agregar Usuario</a>
</div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>


<script type="text/javascript">

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
    aler("alert");     
    }
}
    </script>











  

    <script type='text/javascript' src='../js/jquery.js'></script>

    <script type='text/javascript' src='../js/jquery-migrate.min.js'></script>

    <script type='text/javascript' src='../js/easing.min.js'></script>

    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

    <script type='text/javascript' src='../js/superfish-1.7.4.min.js'></script>

    <script type='text/javascript' src='../js/script.js'></script>


   
</body>

</html>
<?php
  //Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
	 <title>Inventario</title>
	   <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body>
	<!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header navbar dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="Proyecto ABP.php" class="logo"><img src="img/Icono1.png" width="250"></a>
            <!--logo end-->


            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Usuario</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu logout">
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>    
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="AdministradorMenu.html">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>      
                  <li>
                      <a class="" href="AdministradorPedidos.php">
                          <i class="icon_genius"></i>
                          <span>Pedidos</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="AdministradorInventario.html">
                          <i class="icon_piechart"></i>
                          <span>Inventario</span>
                      </a>                     
                  </li>
                  <li>                     
                      <a class="" href="AdministradorReportes.php">
                          <i class="icon_documents_alt"></i>
                          <span>Reportes</span>
                      </a>                     
                  </li>           
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
  <!-- Pagina Inicio -->
  <div class="container3">
  <div class="col-md-6 portlets">
    <div class="panel panel-default">
        <div class="panel-heading">
          <div class="pull-left" style="color:#ff2d55;">Agregar productos</div> 
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
                  <div class="padd">
                    <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal" action="productos.php" method="post">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Nombre</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="title" name="nombre">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">Precio</label>
                                              <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nombre" name="precio">
                                              </div>
                                          </div> 
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Descripcion</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content" name="descripcion"></textarea>
                                            </div>
                                          </div>                                         
                                          <div class="form-group2">
                                            <label for="exampleInputFile">Selecciona la imagen</label>
                                            <input type="file" id="exampleInputFile" name="imagen">
                                          </div>
                                          <br>
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                       <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publicar</button>
                          <button type="reset" class="btn btn-default">Borrar</button>
                       </div>
                                          </div>
                                      </form>
                                    </div>
                     </div>
          <div class="widget-foot">
          <!-- Footer goes here -->
          </div>
        </div>
    </div>
   </div>
   </div>               
   
   <!-- Inicio Panel De Dulces Izquierdo -->
  <div class="col-lg-6">
    <section class="panel">                        
      <header class="panel-heading">
        <div class="pull-left" style="color:#ff2d55;">Visaluzación de productos agregados.</div>
      </header>
        <div class="panel-body">
          <?php

            $sql = "SELECT * FROM productos";
            $ejecuta_sentencia = mysqli_query($conexion, $sql);

             while ($mostrar=mysqli_fetch_array($ejecuta_sentencia)) {
           ?>     
          
          <div class="panel panel-info">
            <div class=""><img src="img/<?php echo $mostrar['imagen'] ?>" width="70"><?php echo $mostrar['nombre'] ?>-$<?php echo $mostrar['precio'] ?><label class="checkbox-inline">
                <a class="btn btn-success" href="modificarProductos.php?id=<?php echo $mostrar['id'] ?>"><i class="icon_plus_alt2"></i></a>
                <a class="btn btn-danger" href="eliminarProductos.php?id=<?php echo $mostrar['id'] ?>"><i class="icon_close_alt2"></i></a>
              </label></div>
            <div class="panel-content"><?php echo $mostrar['descripcion'] ?></div>
          </div>
          
          <?php
            }
          ?>
        </div>
    </section>
  </div>
<!-- Fin Panel De Dulces Izquierdo -->
                  

  
  <!-- Pagina Fin -->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>
</body>
</html>
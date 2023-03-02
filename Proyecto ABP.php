<?php
$conexion=mysqli_connect("localhost", "root", "", "proyecto"); 
session_start();
if(isset($_SESSION['carrito'])) {
  $arreglo=$_SESSION['carrito'];
  $encontro=false;
  $numero=0;
  for($i=0;$i<count($arreglo);$i++) {
    if($arreglo[$i]['Id']==$_GET['id']) {
      $encontro=true;
      $numero=$i;
    }
  }
  if($encontro==true) {
    $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
    $_SESSION['carrito']=$arreglo;
  }else{
    $nombre="";
    $precio=0;
    $imagen="";
    $sql = "SELECT * FROM productos WHERE id=".$_GET['id'];
    $ejecuta_sentencia = mysqli_query($conexion, $sql);
    while($f=mysqli_fetch_array($ejecuta_sentencia)) {
        $nombre=$f['nombre'];
        $precio=$f['precio'];
        $imagen=$f['imagen'];
    }
    $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                    'Precio'=>$precio,
                    'Imagen'=>$imagen,
                    'Cantidad'=>1);
    array_push($arreglo, $datosNuevos);
    $_SESSION['carrito']=$arreglo;
  }


}else{
  if(isset($_GET['id'])) {
    $nombre="";
    $precio=0;
    $imagen="";
    $sql = "SELECT * FROM productos WHERE id=".$_GET['id'];
    $ejecuta_sentencia = mysqli_query($conexion, $sql);
    while($f=mysqli_fetch_array($ejecuta_sentencia)) {
        $nombre=$f['nombre'];
        $precio=$f['precio'];
        $imagen=$f['imagen'];
    }
    $arreglo[]=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                    'Precio'=>$precio,
                    'Imagen'=>$imagen,
                    'Cantidad'=>1);
    $_SESSION['carrito']=$arreglo;
  }
}

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
	<title>Candy Plus</title>
  <style type="text/css">
    .dulces {
      text-align: center;
    }

    /*.color {*/
      /*background: #F74DAC;*/
    /*}*/

    /*.color2 {*/
      /*background: #CF2BBE;*/
    /*}*/

    #p1 { 
      display: none;
     }


  </style>
  <!-- jquery -->
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-3.4.1.min"></script>
  <script src="js/jquery.empty.js"></script>
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
  <!-- popu style -->
  <link href="css/popu.css" rel="stylesheet">
  <!-- JavaScript -->
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    
    <!--Inicio De Menu De Navegacion-->
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand"><img src="img/Icono1.png" width="250"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><img src="img/IconoMenu.png"></a>
                <ul class="dropdown-menu">
                    <li><a href="login.html">Administradores</a></li>
                    <li><a href="Acerca De.html">Acerca De</a></li>
                    <li><a href="#" id="btn-abrir-popup1">Reportar Problema</a></li>
                </ul>
            </li>
        </ul>
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">                    
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>                    
        </ul>
        <!--  search form end -->                
      </div>
      </div><!-- /.navbar-collapse -->
    </nav>

  <!--Fin De Menu De Navegacion-->
    
	<!--Inicio Banner Imagenes-->
  <section class="panel">
    <div id="c-slide" class="carousel slide auto panel-body">
      <ol class="carousel-indicators out">
        <li class="active" data-slide-to="0" data-target="#c-slide"></li>
        <li class="" data-slide-to="1" data-target="#c-slide"></li>
        <li class="" data-slide-to="2" data-target="#c-slide"></li>
      </ol>
    <div class="carousel-inner">
      <div class="item text-center active">
        <img src="img/Banner1.jpg">
        <!-- <small class="">Endulzate la clase</small> -->
      </div>
      <div class="item text-center">
        <img src="img/Banner2.jpg">
        <!-- <small class="">Endulzate la clase</small> -->
      </div>
      <div class="item text-center">
        <img src="img/Banner3.jpg">
        <!-- <small class="">Endulzate la clase</small> -->
      </div>
    </div>
    <a data-slide="prev" href="#c-slide" class="left carousel-control">
      <i class="arrow_carrot-left_alt2"></i>
    </a>
     <a data-slide="next" href="#c-slide" class="right carousel-control">
        <i class="arrow_carrot-right_alt2"></i>
     </a>
    </div>
  </section>
  <!--Final Banner Imagenes-->
  

<!-- Inicio Panel De Dulces Izquierdo -->
  <div class="col-lg-6">
    <section class="panel">                        
      <header class="panel-heading">
        <h3 class="dulces">Dulces</h3>
      </header>
        <div class="panel-body">
          <?php

            $sql = "SELECT * FROM productos";
            $ejecuta_sentencia = mysqli_query($conexion, $sql);

             while ($mostrar=mysqli_fetch_array($ejecuta_sentencia)) {
           ?>     
          
          <div class="panel panel-info">
            <div class=""><img src="img/<?php echo $mostrar['imagen'] ?>" width="70"><?php echo $mostrar['nombre'] ?>-$<?php echo $mostrar['precio'] ?><label class="checkbox-inline">
                <a class="btn btn-danger" href="Proyecto ABP.php?id=<?php echo $mostrar['id'] ?>"><i class="icon_plus_alt2"></i></a><strong> Añadir al carrito</strong>
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

<!-- Inicio Panel Derecho -->
  <div class="col-lg-6">
    <section class="panel">                        
      <header class="panel-heading">
        <h3 class="dulces">Carrito</h3>
      </header>
        <div class="panel-body">
          <?php
          $total=0;
            if(isset($_SESSION['carrito'])) {
              $datos=$_SESSION['carrito'];
              
              for($i=0;$i<count($datos);$i++) {
          ?>
        <div class="producto">
          <div class="panel panel-info">
              <div class=""><img src="img/<?php echo $datos[$i]['Imagen']; ?>" width="70"><?php echo $datos[$i]['Nombre']; ?>-$<?php echo $datos[$i]['Precio']; ?><label class="checkbox-inline">
              </label></div>
              <div class="container">
               Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'] ?>" data-precio="<?php echo $datos[$i]['Precio']; ?>" data-id="<?php echo $datos[$i]['Id']; ?>" class="cantidad">
               <span class="subtotal">Subtotal: <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio']; ?></span>
             </div>
          </div>
        </div>
          <?php
          $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;    
              }
            }else{

            }
            if($total!=0) {
            echo "<center><h2 id='total'>Total: $total</h2></center>";
            } 
            if($total!=0) {
          ?>
          <a class="btn btn-danger" href="compras.php" value="Listar Datos Capturados"  ">Terminar Compra</a>
          <?php
            }
          ?>

        </div>
    </section>
  </div>
<!-- Fin Panel De Derecho -->


      <!-- Inicio Formulario De Reportes   -->
      <div class="contenedor" id="miFormulario1">
        <div class="overlay" id="overlay1">
          <div class="popup" id="popup1">
            <a href="#" id="btn-cerrar-popup1" class="btn-cerrar-popup"><img src="img/regresar.png"></a>
        <form class="form-horizontal " action="reportes.php" method="post">
          <div>
            <h1 align="center" style="color:#ff2d55;">QUEJAS</h1>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Ingresa tu nombre">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Ingresa tu apellido">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Grado</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="grado1" name="grado1" placeholder="Ingresa el grado el grado que cursas">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Grupo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="grupo1" name="grupo1" placeholder="Ingresa el salon en el que estas">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Telefono</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Ingresa tu numero de telefono">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Queja</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="queja1" name="queja1" placeholder="Ingresa la queja que quieres mandar">
              </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Enviar</button>
        </form>
        </div>
      </div>
      </div>

        
      <script type="text/javascript">

        // Con esto abrimos el formulario para los reportes de problemas
        var btnAbrirPopup1 = document.getElementById('btn-abrir-popup1'),
          overlay1 = document.getElementById('overlay1'),
          popup1 = document.getElementById('popup1'),
          btnCerrarPopup1 = document.getElementById('btn-cerrar-popup1');

          btnAbrirPopup1.addEventListener('click', function(){
          overlay1.classList.add('active');
          popup1.classList.add('active');
      });

        btnCerrarPopup1.addEventListener('click', function(e){
        e.preventDefault();
        overlay1.classList.remove('active');
        popup1.classList.remove('active');
      });



    // Borra Los Dulces Pedidos Que Fueron Impresos En La Pantalla  
    $("#cva").click(function(){
        $("#parrafin").empty();
        
        
      
    });

    $("#btn-cerrar-popup").click(function(){
        $("#parrafin").empty();       
    });

    $("#btn-cerrar-popup1").click(function(){
        $("#parrafin").empty();       
    });
    

      </script>                   
<!-- Fin Formulario De Pedidos   -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- gritter -->

<!-- custom gritter script for this page only-->
<script src="js/gritter.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>
</body>
</html>
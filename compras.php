<?php
$conexion=mysqli_connect("localhost", "root", "", "proyecto"); 
session_start();
	$arreglo=$_SESSION['carrito'];
	$numeroventa=0;
	$sql = "SELECT * FROM compras ORDER BY numeroventa DESC limit 1";
    $ejecuta_sentencia = mysqli_query($conexion, $sql);
    while($f=mysqli_fetch_array($ejecuta_sentencia)) {
    	$numeroventa=$f['numeroventa'];
    }
    if($numeroventa==0) {
    	$numeroventa=1;
    }else{
    	$numeroventa=$numeroventa+1;
    }
    for($i=0; $i<count($arreglo); $i++) {
    $insertar =	"INSERT INTO compras(numeroventa, nombre, imagen, precio, cantidad, subtotal) VALUES (
		".$numeroventa.",
		'".$arreglo[$i]['Nombre']."',
		'".$arreglo[$i]['Imagen']."',
		'".$arreglo[$i]['Precio']."',
		'".$arreglo[$i]['Cantidad']."',
		'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
    	)";

    	$resultado = mysqli_query($conexion, $insertar);
		if (!$resultado) {
			header("location:Errorpedido.html");
		} else {
			
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
<body style="background-color: #F1F1F1;">
    
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
  <div class="container" style="background-color: white;">
	<form class="form-horizontal " action="pedidos.php" method="post">
          <div>
            <h1 align="center" style="color:#ff2d55;">PEDIDOS</h1>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa solo un apellido" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Grado</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="grado" name="grado" placeholder="Ingresa el grado el grado que cursas" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Grupo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Ingresa el salon en el que estas" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Telefono</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu numero de telefono" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Encuentro</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="encuentro" name="encuentro" placeholder="Ingresa en donde se te entregaran los dulces" required>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Numero De Venta</label>
          <div class="col-sm-10">
            <textarea name="numeroventa" class="form-control"><?php echo "$numeroventa"; ?></textarea>
          </div>
      		</div>
          <br>
          <center><button type="submit" class="btn btn-warning" id="cva" >Enviar</button></center>
        </form>
      </div>  

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
    <?php
unset($_SESSION['carrito']);
?>

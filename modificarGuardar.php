<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

$id=$_REQUEST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$precio = $_POST['precio'];

$insertar = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', imagen='$imagen', precio='$precio' WHERE id='$id'";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	header("location:Errorpedido.html");
} else {
	header("location:AdministradorInventario.php");
}

mysqli_close($conexion);
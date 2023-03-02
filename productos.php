<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$precio = $_POST['precio'];

$insertar = "INSERT INTO productos(nombre, descripcion, imagen, precio) VALUES ('$nombre', '$descripcion', '$imagen', '$precio')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	header("location:Errorpedido.html");
} else {
	header("location:AdministradorInventario.php");
}

mysqli_close($conexion);
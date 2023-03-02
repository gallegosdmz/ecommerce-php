<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$telefono = $_POST['telefono'];
$encuentro = $_POST['encuentro'];
$numeroventa = $_POST['numeroventa'];

$insertar = "INSERT INTO pedidos(nombre, numeroventa, apellido, grado, grupo, tel, encuentro) VALUES ('$nombre', '$numeroventa', '$apellido', '$grado', '$grupo', '$telefono', '$encuentro')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	header("location:Errorpedido.html");
} else {
	header("location:Proyecto ABP.php");
}


mysqli_close($conexion);
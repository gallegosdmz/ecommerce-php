<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

$nombre = $_POST['nombre1'];
$apellido = $_POST['apellido1'];
$grado = $_POST['grado1'];
$grupo = $_POST['grupo1'];
$telefono = $_POST['telefono1'];
$queja = $_POST['queja1'];

$insertar = "INSERT INTO reportes(nombre, apellido, grado, grupo, tel, queja) VALUES ('$nombre', '$apellido', '$grado', '$grupo', '$telefono', '$queja')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	header("location:Errorreporte.html");
} else {
	header("location:Proyecto ABP.php");
}

mysqli_close($conexion);
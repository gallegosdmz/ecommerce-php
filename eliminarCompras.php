<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

$id=$_REQUEST['id'];

$sql = "DELETE FROM compras WHERE id='$id'";
$ejecuta_sentencia = mysqli_query($conexion, $sql);

if ($ejecuta_sentencia) {
	header("location:carrito.php");
}else{
	echo "Insercion no exitosa";
}
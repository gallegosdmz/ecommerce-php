<?php
//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");

$id=$_REQUEST['id'];

$sql = "DELETE FROM productos WHERE id='$id'";
$ejecuta_sentencia = mysqli_query($conexion, $sql);

if ($ejecuta_sentencia) {
	header("location:AdministradorInventario.php");
}else{
	echo "Insercion no exitosa";
}
<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//Conectar a la bd 
$conexion=mysqli_connect("localhost", "root", "", "proyecto");
$consulta="SELECT * FROM cuentas WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:AdministradorMenu.html");
}
else {
	header("location:Error.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion); 
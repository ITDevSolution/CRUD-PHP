<?php 
$conexion = new mysqli('localhost','root','toor','prueba');

if ($conexion->connect_error) {
	die('error en la conexion'. $conexion->connect_error);
}else{
printf("Se establecio conexion correctamente: %s\n",$conexion->server_info);	
}
$conexion->close();

?>
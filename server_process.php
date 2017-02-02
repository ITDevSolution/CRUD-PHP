<?php 
/* 
*Script: tablas de multiples datos del lado del servidor para PHP Y MySQL.
*Copyright: 2016 - Joel Ronceros
*License>: GPL v2 or BSD (3-poin)

*/
require 'conexion.php';

/*Nombre de la tabla*/
$stabla = 'personas';

/*Array que contiene los nombres de las columnas de la tabla*/
$acolumnas = ['id','nombre','correo','telefono'];

/*Columna indexada*/

$sIndexColum = 'id';

//Paginacion
$sLimit = "";
	if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
		$sLimit = "LIMIT ".$_GET['iDisplayStart'].", ".$_GET['iDisplayLength'];
	}



?>
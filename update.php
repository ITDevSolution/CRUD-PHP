<?php 
	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];
	$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

	$arrayIntereses = null;

	$num_array = count($intereses);
	$contador = 0;

	if ($num_array>0) {
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1) {
				$arrayIntereses = $arrayIntereses.$value." ";
			}else{
				$arrayIntereses.= $value;
			}
			$contador++;
		}
	}

	$sql = "UPDATE personas SET nombre='$nombre', correo='$email', telefono='$telefono', estado_civil='$estado_civil', hijos='$hijos', intereses='$arrayIntereses' WHERE id = '$id'";

	$resultado = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row" style="text-align: center;">
				<?php if($resultado){ ?>
				<h3>REGISTRO ACTUALIZADO</h3>
				<?php }else{ ?>
				<h3>ERROR AL ACTUALIZAR</h3>
				<?php } ?>

				<a href="index.php" class="btn btn-primary">Regresar</a>

			</div>
		</div>
		
	</div>
	
</body>
</html>
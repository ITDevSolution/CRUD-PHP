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
			<h3 style="text-align: center;">NUEVO REGISTRO</h3>
		</div>
		<form class="form-horizontal" method="post" action="guardar.php" autocomplete="off">
		<div class="form-group">
			<label for="nombre" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
			</div>
		</div>

		<div class="form-group">
			<label for="telefono" class="col-sm-2 control-label">Telefono</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
			</div>
		</div>

		<div class="form-group">
			<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
			<div class="col-sm-10">
				<select class="form-control" id="estado_civil" name="estado_civil">
				<option value="soltero">SOLTERO</option>
				<option value="casado">CASADO</option>
				<option value="otro">OTRO</option>
				</select>
			</div>
		</div>

		<div class="form-group">
		<label for="hijos" class="col-sm-2 control-label">Tiene Hijos?</label>
		<div class="col-sm-10">
			<label class="radio-incline">
				<input type="radio" id="hijos" name="hijos" value="1" checked> SI
			</label>

			<label class="radio-incline">
				<input type="radio" id="hijos" name="hijos" value="0"> NO
			</label>
		</div>
		</div>

		<div class="form-group">
			<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
			<div class="col-sm-10">
				<label class="checkbox-inline">
					<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros">Libros
				</label>

				<label class="checkbox-inline">
					<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica">Musica
				</label>

				<label class="checkbox-inline">
					<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes">Deportes
				</label>

				<label class="checkbox-inline">
					<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros">Otros
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<a href="index.php" class="btn btn-default">Regresar</a>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
			
		</div>
			
		</form>
	</div>
</body>
</html>
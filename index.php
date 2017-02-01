<?php
	require 'conexion.php';

	$where = "";

	$sql = "SELECT * FROM personas";
	$resul = $conexion->query($sql);

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
	<header>
		
	</header>
	<nav>
		
	</nav>
	<section>
		<div class="container">
			<div class="row">
			
			<h2 style="text-align: center;">Curso de PHP y MySQL</h2>
			</div>

			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
			</div>

			<br>

			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						<?php while ($row = $resul->fetch_array(MYSQL_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
			</div>

			<div class="modal-body">
				Desea eliminar este registro?
			</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	    </div>

	    <script>
	    	$('#confirm-delete').on('show.bs.modal', function(e){
	    		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

	    		$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-okn').attr('href')+ '</strong>');
	    	});
	    </script>

		<article>

			
		</article>
	</section>
	<aside>
		
	</aside>
	<footer>
		
	</footer>
</body>
</html>	


<?php
	require 'conexion.php';

	$where = "";

	if (!empty($_POST)) {

		$valor = $_POST['campo'];
		if (!empty($valor)){
			$where =  "WHERE Nombre LIKE '%$valor%'";
		}
	}

	$sql = "SELECT * FROM personas $where LIMIT 100";
	$resul = $conexion->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>CRUD PHP</title>
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#mitabla').DataTable({
				"order": [[1, "asc"]],
				"language":{
				"lengthMenu": "Mostrar _MENU_ registro por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron registros coincidentes",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
					},					

				}	

			});
		});

	</script>

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

				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo">
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info">

				</form>
			</div>

			<br>

			<div class="row table-responsive">
				<table class="display" id="mitabla">
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
						<?php while ($row = $resul->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>

								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
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
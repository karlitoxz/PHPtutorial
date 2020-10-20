<?php 
	if (isset($_SESSION["validarIngreso"])) {
		if ($_SESSION["validarIngreso"] != 'ok') {

			echo "<script>window.location = 'index.php?pagina=ingreso'</script>";
			return;
		}
	}else{
			echo "<script>window.location = 'index.php?pagina=ingreso'</script>";
			return;
	}
	$usuarios = ControladorFormularios::ctrSeleccionarRegistro(null,null);
	/*echo '<pre>';print_r($usuarios);echo '<pre>';*/



	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($usuarios as $key => $value): ?>

			<tr>
				<td><?php echo ($key+1) ?></td>
				<td><?php echo $value["nombre"]; ?></td>
				<td><?php echo $value["email"]; ?></td>
				<td><?php echo $value["fecha"]; ?></td>
				<td>
					<div class="btn-group">
						<a href="index.php?pagina=editar&token=<?php echo $value['token']; ?>" class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>

						<form method="POST">
							<input type="hidden" value="<?php echo $value['token']; ?>" name="eliminarRegistro">
							<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						</form>

						<?php 

							$eliminar = new ControladorFormularios();
							$eliminar ->ctrEliminarRegistro();

						?>
						

					</div>
				</td>
			</tr>
			
		<?php endforeach ?>

	</tbody>
</table>
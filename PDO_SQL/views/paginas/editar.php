<?php 
	if (isset($_GET['token'])) {
		
		$item = 'token';
		$valor = $_GET['token'];
		$usuario = ControladorFormularios::ctrSeleccionarRegistro($item, $valor);
		/*print_r($usuario);*/
	}

?>

<div class="display-4">Editar.php</div>
<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="POST">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<div class="input-group">
				    <div class="input-group-prepend">
	      					<span class="input-group-text"><i class="fas fa-user"></i></span>
	    			</div>
				<input type="text" class="form-control" placeholder="Enter nombre" id="nombre" value="<?php echo $usuario['nombre'] ?>"  name="actualizarNombre">
			</div>	
		</div>



		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				    <div class="input-group-prepend">
	      					<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
	    			</div>
				<input type="email" class="form-control" placeholder="Enter email" id="email" value="<?php echo $usuario['email'] ?>" name="actualizarEmail">
			</div>
		</div>

		<div class="form-group">
			<label for="pwd">pwd:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="actualizarPassword">

				<input type="hidden" name="passwordActual" value="<?php echo $usuario['password'] ?>">
				<input type="hidden" name="tokenUsuario" value="<?php echo $usuario['token'] ?>">
			</div>

		</div>

		<?php 
			#Actulizar registros

				$actualizar = new ControladorFormularios();
				$actualizar -> crtActualizarRegistro();

		?>


		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
</div>


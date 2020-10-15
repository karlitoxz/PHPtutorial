<div class="display-4">registro.php</div>
<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="POST">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<div class="input-group">
				    <div class="input-group-prepend">
	      					<span class="input-group-text"><i class="fas fa-user"></i></span>
	    			</div>
				<input type="text" class="form-control" placeholder="Enter nombre" id="nombre"  name="registroNombre">
			</div>	
		</div>



		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				    <div class="input-group-prepend">
	      					<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
	    			</div>
				<input type="email" class="form-control" placeholder="Enter email" id="email" name="registroEmail">
			</div>
		</div>

		<div class="form-group">
			<label for="pwd">pwd:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="registroPassword">
			</div>

		</div>
		<?php
			#Instanciar la clase metodo no estatio
			#no se puede reutilizar la informacion
			/*$registro = new ControladorFormularios();
			$registro -> ctrRegistro();*/

			#Instanciar la clase metodo estatico
			#Si se puede reutilizar la informacion
			$registro = ControladorFormularios::ctrRegistro();
			if ($registro == "ok") {
				#Borrar cache añadiendo un javaScript
				echo "<script>if(window.history.replaceState){window.history.replaceState(null, null, window.location.href);} </script>";
				echo '<div class="alert alert-success">El usuario a sido registrado</div>';
			} else {
				/*echo '<div class="alert alert-warning">El usuario NO a sido registrado</div>';*/
			}
			


		?>

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>


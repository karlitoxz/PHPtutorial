
<div class="display-4">Ingreso.php</div>
<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="POST">


		<div class="form-group">
			<label for="email">Email:</label>
			<div class="input-group">
				    <div class="input-group-prepend">
	      					<span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
	    			</div>
				<input type="email" class="form-control" placeholder="Enter email" id="email" name="ingresoEmail">
			</div>
		</div>

		<div class="form-group">
			<label for="pwd">Password:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" class="form-control" placeholder="Enter Password" id="pwd" name="ingresoPassword">
			</div>

		</div>
		<?php
			#Instanciar la clase metodo Estatico

			$ingreso = new ControladorFormularios();
			$ingreso ->ctrIngreso();
			
		?>

		<button type="submit" class="btn btn-primary">Ingresar</button>
	</form>
</div>


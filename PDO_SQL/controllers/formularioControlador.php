<?php 

	class ControladorFormularios{
		#Registro

		static public function ctrRegistro(){
			if (isset($_POST['registroNombre'])) {
				return "ok";
			} else {
				return "No existe la variable";
			}
			
		}
	}
 ?>
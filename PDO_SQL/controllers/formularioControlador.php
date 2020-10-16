<?php 

	class ControladorFormularios{
		#Guardar Registros

		static public function ctrRegistro(){
			if (isset($_POST['registroNombre'])) {
				$tabla = "registros";
				$datos = array("nombre"=>$_POST['registroNombre'],
								"email"=>$_POST['registroEmail'],
								"password"=>$_POST['registroPassword']);
				$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
				return $respuesta;
			} else {
				return "No existe la variable";
			}
			
		}

		#Seleccionar Registros
		static public function ctrSeleccionarRegistro(){
			$tabla = "registros";
			$respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla);
			return $respuesta;
		}

	}
 ?>
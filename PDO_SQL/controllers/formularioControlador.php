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
			$respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,null,null);
			//print_r($respuesta);
			return $respuesta;
		}

		#Ingreso
			public function ctrIngreso(){

				if (isset($_POST['ingresoEmail'])) {
					$tabla = "registros";
					$item = "email";
					$valor = $_POST["ingresoEmail"];

					$respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);

					if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"] ){
						$_SESSION["validarIngreso"] = 'ok';
						echo '<div class="alert alert-success">Ingreso Exitoso</div>';
						echo "<script>window.location = 'index.php?pagina=inicio'</script>";
					}else{
					#Borrar cache añadiendo un javaScript
				echo "<script>if(window.history.replaceState){window.history.replaceState(null, null, window.location.href);} </script>";
				echo '<div class="alert alert-danger">Error al ingresar al sistema.</div>';
					}

					/*echo "<br>".print_r($respuesta)."<br>";*/
				}	
			}

	}
 ?>
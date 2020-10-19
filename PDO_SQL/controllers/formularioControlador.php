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
		static public function ctrSeleccionarRegistro($item,$valor){
			$tabla = "registros";
			$respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);
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

		#Actualizar registro:
			public function crtActualizarRegistro(){

				if (isset($_POST['actualizarNombre'])) {
					
					if ($_POST['actualizarNombre'] != "") {
						$password = $_POST['actualizarNombre'];
					}else{
						$password = $_POST['passwordActual'];
					}



					$tabla = "registros";
					$datos = array(
						"id"=>$_POST['idUsuario'],
						"nombre"=>$_POST['actualizarNombre'],
						"email"=>$_POST['actualizarEmail'],
						"password"=>$password);
					$respuesta = ModeloFormularios::mdlActualizar($tabla,$datos);
					if ($respuesta = 'ok') {
						echo "<div class='alert alert-success'>El usuario a sido actualizado</div>";
						#Borrar cache añadiendo un javaScript
						echo "<script>if(window.history.replaceState){window.history.replaceState(null, null, window.location.href);} </script>";
					}
				} else {
					return "No existe la variable";
				}
			}

	}
 ?>


<?php 

	class ControladorFormularios{
		#Guardar Registros

		static public function ctrRegistro(){

			if (isset($_POST['registroNombre'])) {
					#Expresion regular para permitir caracteres
				if (preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ ]+$/', $_POST['registroNombre']) &&
					preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $_POST['registroEmail'])) {
					
					$tabla = "registros";

					$token = md5($_POST['registroNombre']."+".$_POST['registroEmail']);

					$datos = array("token"=>$token,
									"nombre"=>$_POST['registroNombre'],
									"email"=>$_POST['registroEmail'],
									"password"=>$_POST['registroPassword']);
					$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

					return $respuesta;


				} else {
					$respuesta = "error";
					return $respuesta;
				}
				

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
					/*print_r($respuesta);*/

					if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"] ){
						$_SESSION["validarIngreso"] = 'ok';

						#Reiniciar intentos fallidos:
						ModeloFormularios:: mdlActualizarIntentosFallidos($tabla,0,$respuesta["token"]);

						echo '<div class="alert alert-success">Ingreso Exitoso</div>';
						echo "<script>window.location = 'index.php?pagina=inicio'</script>";
					}else{

						if ($respuesta["intentos_fallidos"] < 5) {
							#Guardar intentos fallidos de login:
								$i_f = $respuesta["intentos_fallidos"]+1;
								$actIntentosFallidos =  ModeloFormularios:: mdlActualizarIntentosFallidos($tabla,$i_f,$respuesta["token"]);
									print_r($i_f);
						}else{

							echo '<div class="alert alert-warning">Debes validar que no eres un robot ReCatcha</div>';
						}

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

						$tabla="registros";
						$item="token";
						$valor=$_POST['tokenUsuario'];

						#traer datos del usuario para comparar el token:
						$usuario = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);

						$compararToken = md5($usuario['nombre']."+".$usuario['email']);

						if ($compararToken == $valor) {
							
									if ($_POST['actualizarNombre'] != "") {
										$password = $_POST['actualizarPassword'];
									}else{
										$password = $_POST['passwordActual'];
									}


								$datos = array(
									"token"=>$_POST['tokenUsuario'],
									"nombre"=>$_POST['actualizarNombre'],
									"email"=>$_POST['actualizarEmail'],
									"password"=>$password);
								$respuesta = ModeloFormularios::mdlActualizar($tabla,$datos);

								if ($respuesta = 'ok') {
									echo "<div class='alert alert-success'>El usuario a sido actualizado</div>";
									#Borrar cache añadiendo un javaScript
									echo "<script>if(window.history.replaceState){window.history.replaceState(null, null, window.location.href);} </script>";
									#Reenvio despues de un tiempo en javaScript
									echo "<script>setTimeout(function(){window.location = 'index.php?pagina=inicio';},3000);</script>";
							}
					} else {
						echo "<div class='alert alert-danger'>Error, el usuario NO ha sido actualizado</div>";
					}

				}



					
					
			}

		#Eliminar Registro

			public function ctrEliminarRegistro(){
				if (isset($_POST['eliminarRegistro'])) {

						$tabla="registros";
						$item="token";
						$valor=$_POST['eliminarRegistro'];
						#traer datos del usuario para comparar el token:
						$usuario = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);
						$compararToken = md5($usuario['Nombre']."+".$usuario['email']);


						if ($compararToken == $valor) {
								$respuesta = ModeloFormularios::mdleliminarRegistro($tabla,$valor);
								if ($respuesta == 'ok') {
									echo "<script>window.location = 'index.php?pagina=inicio'</script>";
								}						
							return $respuesta;
						}	
				}

			}

	}
 ?>


<?php 

	require_once "conexion.php";
	

	class ModeloFormularios{
		#registro
			static public function mdlRegistro($tabla,$datos){

				#statement-declaracion
				$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");

				#bindParam vincula parametros a variables->envitar injeciones SQL

				$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
				$stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
				$stmt->bindParam(":password",$datos["password"],PDO::PARAM_STR);
				#ejecutar la sentencia
				if ($stmt->execute()) {
					return "ok";
				} else {
					print_r(Conexion::conectar()->errorInfo());
				}

				$stmt->close();
				$stmt = null;

			}


		#Seleccionar Registros
		static public function mdlSeleccionarRegistro($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();
			$stmt = null;
		}

	}

?>
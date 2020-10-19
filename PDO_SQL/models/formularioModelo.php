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
		static public function mdlSeleccionarRegistro($tabla,$item,$valor){

				if ($item == null && $valor == null) {
					#traer todos los registros
						$stmt = Conexion::conectar()->prepare("SELECT *,date_format(fecha,'%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");
						$stmt->execute();

					return $stmt->fetchAll();

				} else {
					#traer 1 solo registro:
					$stmt = Conexion::conectar()->prepare("SELECT *,date_format(fecha,'%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item");

				$stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);

					$stmt->execute();
					return $stmt->fetch();
				}
				

			$stmt->close();
			$stmt = null;
		}

		#Actualizar registros
			static public function mdlActualizar($tabla,$datos){
				#statement-declaracion
				$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre,email=:email,password=:password WHERE id = :id");

				$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
				$stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
				$stmt->bindParam(":password",$datos["password"],PDO::PARAM_STR);
				$stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);

				#ejecutar la sentencia
				if ($stmt->execute()) {
					return "ok";
				} else {
					print_r(Conexion::conectar()->errorInfo());
				}

				$stmt->close();
				$stmt = null;

			}

	}

?>
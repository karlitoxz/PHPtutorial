<?php 

	class Conexion{

		static public function conectar(){

			#parametros:
				#PDO("mysql:host=nombreserver;dbname=nombreBD","usuario","password")

			$link = new PDO("mysql:host=localhost;dbname=curso-php","root","");
			$link->exec("set names utf8");

			return $link;
		}
	}
?>
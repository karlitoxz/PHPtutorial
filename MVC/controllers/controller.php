<?php
	class MvcController{

		#llamada a la plantilla
		#----------------------


		public function plantilla(){
			include "views/template.php";
		}
		#----------------------

		#---navegacion------

		public function navController(){

			if(isset($_GET['action'])){
				$enlaces = $_GET['action'];
			}else{
				$enlaces = "inicio";
			}
			
				//echo $enlaces;
			$respuesta = EnlacesPagina::navModel($enlaces);
			include $respuesta;
		}

		#---navegacion------
	}
	
?>
<?php

	class EnlacesPagina{

		public function navModel($enlaces){
			//echo $enlaces;
			if ($enlaces == "inicio" ||
				$enlaces == "nosotros" ||
				$enlaces == "servicios" ||
				$enlaces == "contactenos") {
					$module = "views/modulos/".$enlaces.".php";
							//echo $enlaces;
			}else{
				$module = "views/modulos/inicio.php";
			}

			return $module;
		}

	}

?>
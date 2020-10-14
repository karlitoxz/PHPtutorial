<?php
	#se empaquetas los objetos en clases

	#declarar clase:
	class Automovil{
		#propiedades:
		public $marca;
		public $modelo;

		#metodo
		public function mostrar(){
			echo "<p>Hola soy un $this->marca, modelo $this->modelo";
		}
	}

	#declarar objeto:
		$auto1 = new Automovil();
			$auto1 -> marca = "Toyota";
			$auto1 -> modelo = "Corola";
			$auto1 -> mostrar();

		$auto2 = new Automovil();
			$auto2 -> marca = "Hyundai";
			$auto2 -> modelo = "Acess";
			$auto2 -> mostrar();


?>
<?php
#codigoImperativo.php
	#variables
	$automovil1 = (object)["marca"=>"toyota","modelo"=>"corola"];
	$automovil2 = (object)["marca"=>"Hyundai","modelo"=>"Acess"];

	#funciones:

	function mostrar($automovil){
		echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo";
	}

	mostrar($automovil1);
	mostrar($automovil2);
?>
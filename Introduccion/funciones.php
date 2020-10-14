<?php

	#variables:
	$br = "<br>";

	#funciones sin parametros
	function saludo(){
		echo "Hola..<br>";
	}

	saludo();

	#Funciones con parametros
	function despedida($nombre){
		echo "Adios $nombre";
	}

	despedida("Juan $br");

	#Funciones con retorno:
	function retorno($return){
		return $return;
	}

	echo retorno("Texto retornado");

?>
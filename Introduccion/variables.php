<?php


	print('Mi primer print <br>');
	
	#variables:
	$juan = 'juan';
	$colores = array("Rojo","Amarillo");
	$verduras = array("verdura1"=>"Lechuga","verdura2"=>"Cebolla");
	$frutas = (object)["fruta1"=>"Pera","fruta2"=>"Manzana"];

	#imprecion:
	echo "Mi segundo print", " resultado $juan $colores[0]", "<br>", "$verduras[verdura1]","<br>","$frutas->fruta1";
	echo "<br>";

	var_dump($juan);
?>
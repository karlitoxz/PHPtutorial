<?php
	require_once "controllers/plantillaControlador.php";
	require_once "controllers/formularioControlador.php";
	require_once "models/conexion.php";
	#mostraremos las vistas a los usuarios:
	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrTraerPlantilla();

	$conexion = Conexion::conectar();

	echo print_r($conexion);

?>
<?php
	require_once "controllers/plantillaControlador.php";
	require_once "controllers/formularioControlador.php";
	require_once "models/formularioModelo.php";

	#mostraremos las vistas a los usuarios:
	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrTraerPlantilla();



?>
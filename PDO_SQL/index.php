<?php
	require_once "controllers/plantillaControlador.php";
	require_once "controllers/formularioControlador.php";
	#mostraremos las vistas a los usuarios:
	$plantilla = new ControladorPlantilla();
	$plantilla -> ctrTraerPlantilla();	

?>
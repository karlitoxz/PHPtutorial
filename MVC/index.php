<?php
	require_once "controllers/controller.php";
	require_once "models/model.php";
	#mostraremos las vistas a los usuarios:
	$mvc = new MvcController();
	$mvc -> plantilla();	

?>
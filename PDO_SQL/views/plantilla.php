<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Logo -->

		<div class="container-fluid">
			<h3 class="text-center py-3">LOGO</h3>
		</div>

<!-- Navegacion -->		

		<div class="container-fluid">
			<div class="container">
				<ul class="nav nav-justified py-2 nav-pills">
					<li class="nav-item">
						<a class="nav-link " href="index.php?pagina=registro">Registro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>
				</ul>
			</div>
		</div>

<!-- contenido -->

<div class="container-fluid">
	<div class="container py-5">

		<?php
			if (isset($_GET['pagina'])) {
				//echo $_GET['pagina'];
				$pagina = $_GET['pagina'];

					if ($pagina == "registro"||
						$pagina == "ingreso"||
						$pagina == "inicio"||
						$pagina == "salir") {
						include "paginas/".$pagina.".php";
					}else{
						include "paginas/registro.php";
					} 
			} else {
				include "paginas/registro.php";
			}
			
		?>

	</div>
</div>

	
</body>
</html>
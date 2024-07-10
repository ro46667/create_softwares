<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.container {
			text-align: center;
			background-color: #ffffff;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			color: #333333;
			font-size: 24px;
			margin-bottom: 20px;
		}

		input[type="number"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #dddddd;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.button {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			background-color: #333333;
			color: #ffffff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.button:hover {
			background-color: #555555;
		}
	</style>

	<title>ACTUALIZACIÓN</title>
</head>
<body>

	<h1><center>ACTUALIZACIÓN DE DATOS</h1>
		<center><form action="../controlador/actualizar.php" method="post">
		<div class="input-contenedor">
		INGRESE SU NUMERO DE DOCUMENTO<input type="number" name="ndoc" placeholder="numero de documento">
		</div>
		<p><input type="submit" name="actualizar">
		<p>volver al inicio<a class="link" href="nuevoinicio.php"> inicio</a></p>


</body>
</html>

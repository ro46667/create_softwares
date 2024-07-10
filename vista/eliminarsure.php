<?php
session_start();
?>

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
			align-items : center;
			height: 100vh;	
		}

		.container {
			text-align: center;
			background-color: #ffffff;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}

		h3 {
			color: #333333;
			font-size: 20px;
			margin-bottom: 20px;
		}

		.button {
			padding: 10px 20px;
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

		.link {
			color: #333333;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.link:hover {
			color: #555555;
		}

	</style>
	<title>ELIMINAR</title>
</head>
<body>
	<form action="../modelo/eliminarsure.php">
	<h3>¡ESTAS SEGURO DE QUERER BORRAR!"<?php echo $_SESSION['ndoc'] . " - " . $_SESSION['nom']  ?>"</h3>

	<input type="submit" name="" value="SI"><p>
	</form>
	<a href="../vista/inicio.php"><input type="submit" name="no" value="NO">
	<p>volver al inicio<a class="link" href="inicio.php"> inicio</a></p>

</body>
</html>


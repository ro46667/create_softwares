<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
			body {
			font-family: Arial, sans-serif;
			display: flex;
			min-height: 100vh;
			background: url(logo_sweet_popcorn.png);
			background-position:center center ;
			background-repeat:no-repeat;
			background-size: cover;
			background-attachment: fixed;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 10px;
			margin: 0 auto;
			padding: 20px;
		}

		.form-bienvenida {
			text-align: center;
			background-color:#0687BB;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); n                
		}

		h1 {
			color: #333333;
			font-size: 28px;
		}

		button {
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color:#FF0000;
			color: #ffffff;
		}

	

		button#consultar {
			background-color:#FF0000;
			color: #ffffff;
		}

		button#actualizar {
			background-color:#FF0000;
			color: #ffffff;
		}

		button#borrar {
			background-color:#FF0000;
			color: #ffffff;
		}
		button#manua {
			background-color:#FF0000;
			color: #ffffff;
		}
        button#product {
			background-color:#FF0000;
			color: #ffffff;
		}
		button#se {
			background-color:#FF0000;
			color: #ffffff;
		}
	</style>

	<title>INICIO</title>
</head>
<body>
	<div><section class="form-bienvenida">
	<h1><center>bienvenido a sweet popcorn</center></h1>

	
	<a href="consulta.php"><button id="consultar">CONSULTAR</button>
	<p>
	<a href="actualizar.php"><button id="actualizar">ACTUALIZAR</button>
	<p>
	<a href="eliminar.php"><button id="borrar">ELIMINAR</button>
	<p>
	<a href="manual.php"><button id="manua">manual de usuario</button>
    <p>
    <a href="productos.php"><button id="product"> productos</button>
	<p>
	<a href="inicio.php"><button id="se"> cerrar sesion </button>	

    </a>
	</p>
	<h5>
<font color="#FFFFF" size="2"><i><p>si quieres contactarnos para màs informacion, terminos de uso y condiciones,llamanos al 3138723323 </p></i>
	</h5>
</body>
</html>

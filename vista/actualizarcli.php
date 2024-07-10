  <?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

		input[type="text"],
		input[type="number"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #dddddd;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.boton {
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

		.boton:hover {
			background-color: #555555;
		}
	</style>


	<title>ACTUALIZACIÓN DE DATOS</title>
</head>
<body>
    <div><section class="form-ingreso">
	<h1>ACTUALIZACIÓN DE INFORMACIÓN</h1>

	<form method="post" action="../controlador/actualizarcli.php">
		Tipo de documento: <input class="control" type="text" name="tdoc" value="<?php echo $_SESSION['tdoc']?>">
    
        Numero de documento: <input class="control" type="number" name="ndoc" value="<?php echo $_SESSION['ndoc']?>">
       
        Nombre: <input class="control" type="text" name="nom" value="<?php echo $_SESSION['nom']?>">
        
        Apellido: <input class="control" type="text" name="ape" value="<?php echo $_SESSION['ape']?>">
       
        Dirección: <input class="control" type="text" name="direc" value="<?php echo $_SESSION['direc']?>">
       
        Teléfono: <input class="control" type="number" name="tel" value="<?php echo $_SESSION['tel']?>">
        
        Correo: <input class="control" type="text" name="corr" value="<?php echo $_SESSION['corr']?>">
      
        Contraseña: <input class="control" type="password" name="pass" value="<?php echo $_SESSION['pass']?>">
        
        <input class="boton" type="submit" name="enviar" value="Actualizar">
	</form>
    <p>volver al inicio<a class="link" href="nuevoinicio.php"> inicio</a></p>
</section>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <style>
        body {
			font-family: Arial, sans-serif;
			background-color: #0000;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
		}

		.form-registro {
			background-color: #3342FF;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			color: #333333;
			font-size: 24px;
			margin-bottom: 20px;
		}

		.input-contenedor {
			position: relative;
			margin-bottom: 20px;
		}

		.icon {
			position: absolute;
			top: 50%;
			left: 15px;
			transform: translateY(-50%);
			color: #999999;
		}

		.control {
			width: 100%;
			padding: 10px 40px 10px 35px;
			font-size: 16px;
			border: 1px solid #dddddd;
			border-radius: 5px;
			transition: border-color 0.3s ease;
		}

		.control:focus {
			border-color: #333333;
		}

		.button {
			width: 50%;
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

		.link {
			color: #333333;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.link:hover {
			color: #555555;
		}

	</style>

	<title>registro</title> 

	

</head>  

<form method="post" action="../controlador/registro2.php">
        <h1>Registrate aqui</h1>
        <div class="contenedor">
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="text" name="tdoc" placeholder="tipo doc usuario">
       </div>
       
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="number" name="ndoc" placeholder="num doc usuario">
       
       </div>

       <div class="input-contenedor">
               <i class="fas fa-user icon"></i>
               <input class="control" type="text" name="nom" placeholder="nombre usuario">

       </div>

       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="text" name="ape" placeholder="apellido usuario">

       </div>
       
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="text" name="direc" placeholder="direccion usuario">

       </div>

       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="number" name="tel" placeholder="telefono usuario">

       </div>
       
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="text" name="corr" placeholder="correo usuario">

       </div>

       <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
           <input class="control" type="password" name="pass" placeholder="Contraseña">

        </div>


        <input type="submit" value="Registrate" class="button">
        <p>¿Ya tienes una cuenta? <a class="link" href="sesionson"> Iniciar Sesion como admin</a></p>
        <p>volver al inicio <a class="link" href="inicioadmin.php"> inicio</a></p>
    </div>
   </form>
</form>
</body>
</html>


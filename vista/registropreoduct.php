
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

	<title>registro producto</title> 

	

</head>  

<form method="post" action="../controlador/registroproduct.php">
        <h1>registrar productos nuevos</h1>
        <div class="contenedor">
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="text" name="descrip" placeholder="descripcion del producto">
       </div>
       
       <div class="input-contenedor">
           <i class="fas fa-user icon"></i>
           <input class="control" type="number" name="prec" placeholder="precio">
       
       </div>

       <div class="input-contenedor">
               <i class="fas fa-user icon"></i>
               <input class="control" type="text" name="cate" placeholder="categoria">

       </div>


       

        <input type="submit" value="registra el producto" class="button">
        <p>volver al inicio <a class="link" href="inicioadmin.php"> inicio</a></p>
    </div>
   </form>
</form>
</body>
</html>


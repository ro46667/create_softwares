<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background: url(logo_sweet_popcorn.png) top right no-repeat;
            background-size: auto 100px; /* Ajuste para tamaño automático y altura fija */
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            position: relative; /* Añadido para posicionamiento relativo */
        }

        .background-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: #0687BB;
            z-index: 2; /* Asegura que esté sobre el contenido */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Añadido para z-index */
            z-index: 1; /* Añadido para z-index */
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
            background-color: #FF0000;
            color: #ffffff;
            margin: 10px;
        }

        button:hover {
            background-color: #DD0000;
        }

        h5 {
            color: #0015fd;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>

    <title>INICIO</title>
</head>
<body>
    <div class="background-bar"></div> <!-- Barra de fondo azul -->
    <div class="container">
        <section class="form-bienvenida">
            <h1><center>Acá están tus opciones de administrador</center></h1>

            <a href="consulta.php"><button id="consultar">Consultar</button></a>
            <a href="actualizar.php"><button id="actualizar">Actualizar</button></a>
            <a href="eliminar.php"><button id="borrar">Eliminar</button></a>
            <a href="manual.php"><button id="manua">Manual de usuario</button></a>
            <a href="registro_admin.php"><button id="si">Registrar administrador</button></a>
            <a href="inicio_productos.php"><button id="ll">Productos</button></a>
            <a href="index.html"><button id="hh">Cerrar sesión</button></a>

            <h5>
                <i>Recuerda que siempre puedes pedir ayuda si lo necesitas</i><br>
                <i>Número de contacto: 3138723323</i>
            </h5>
        </section>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background: url(logo_sweet_popcorn.png) top right no-repeat;
            background-size: 300px; /* Ajusta el tamaño del fondo según sea necesario */
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Fondo gris claro */
            position: relative;
        }

        .background-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: #0687BB; /* Color de la barra azul */
            z-index: 9999; /* Asegura que esté sobre todos los elementos */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* Fondo blanco */
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 1; /* Asegura que esté sobre la barra de fondo */
        }

        .form-bienvenida {
            text-align: center;
            background-color: #0687BB;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ffffff; /* Texto blanco */
            font-size: 28px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #FF0000; /* Botones rojos */
            color: #ffffff; /* Texto blanco */
            margin: 10px;
        }

        button:hover {
            background-color: #DD0000; /* Color más oscuro al pasar el mouse */
        }

        h5 {
            color: #FFFFFF; /* Texto blanco */
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
    <title>Zona de Productos</title>
</head>
<body>
    <div class="background-bar"></div>
    <div class="container">
        <section class="form-bienvenida">
            <h1>Zona de Productos</h1>

            <a href="productos.html"><button id="product">Ver Productos</button></a>
            <a href="registropreoduct.html"><button id="reigg">Registrar Productos</button></a>
            <a href="eliminarproductos.html"><button id="ll">Eliminar Productos</button></a>

            <h5>
                <i>Recuerda que siempre puedes pedir ayuda si lo necesitas</i><br>
                <i>Número de contacto: 3138723323</i>
            </h5>
        </section>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuario por Número de Documento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        p {
            background-color: #fff;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .error {
            color: #ff0000;
            margin: 10px 0;
        }
        button#ola {
			background-color:#FF0000;
			color: #ffffff;
		}
    </style>
</head>
<body>

    <?php
    $conn = new PDO('mysql:host=localhost;dbname=palomitas_dulces2', "root", "");
    $no_doc_usuario = $_POST['ndoc'];
    $result = $conn->query("SELECT `tipo_doc_usuario`, `no_doc_usuario`, `nombre_usuario`, `apellido_usuario`, `direccion_usuario`, `telefono_usuario`, `correo_usuario`, `password_usuario`, `estado_usuario` FROM `usuario` WHERE no_doc_usuario = $no_doc_usuario");

    if (!$result) {
        echo "<p class='error'>ERROR: " . $conn->errorinfo()[2] . "</p>";
    }

    while ($row = $result->fetch()) {
        echo "<p>Datos del Usuario:</p>";
        echo "<p>Tipo de Documento: {$row['tipo_doc_usuario']}</p>";
        echo "<p>Número de Documento: {$row['no_doc_usuario']}</p>";
        echo "<p>Nombre: {$row['nombre_usuario']}</p>";
        echo "<p>Apellido: {$row['apellido_usuario']}</p>";
        echo "<p>Dirección: {$row['direccion_usuario']}</p>";
        echo "<p>Teléfono: {$row['telefono_usuario']}</p>";
        echo "<p>Correo: {$row['correo_usuario']}</p>";
        echo "<p>Contraseña: {$row['password_usuario']}</p>";
        echo "<p>Estado: {$row['estado_usuario']}</p>";
    }
    ?>
     <a href="../vista/nuevoinicio.php"><button id="ola"> volver a inicio </button>
</body>
</html>

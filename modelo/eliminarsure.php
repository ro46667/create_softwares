<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
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

        .exitoso {
            color: #008000;
        }

        .fallo {
            color: #ff0000;
        }

        .boton {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .exitoso-btn {
            background-color: #008000;
            color: #fff;
        }

        .fallo-btn {
            background-color: #ff0000;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    require_once ('conexiondb.php');

    $conn = Conectarse();
    $no_doc_usuario = $_SESSION['ndoc'];
    $delete = $conn -> exec("DELETE FROM `usuario` WHERE no_doc_usuario= $no_doc_usuario");

    if (!$delete) {
        echo "<p class='fallo'>Fallo al eliminar el usuario.</p>"; 
    } else {
        echo "<p class='exitoso'>Usuario eliminado exitosamente.</p>";
    }

    echo '<a href="../vista/eliminar.php" class="boton ' . ($delete ? 'exitoso-btn' : 'fallo-btn') . '">Probar otra vez</a>';
    echo '<a href="../vista/nuevoinicio.php" class="boton ' . ($delete ? 'exitoso-btn' : 'fallo-btn') . '">Volver al inicio</a>';
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Productos por Categoría</title>
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
        }
        button#ola {
			background-color:#FF0000;
			color: #ffffff;
		}
    </style>
</head>
<body>

    <?php
    if ($_POST){
        $cate = $_POST['cate'];
        require_once('../modelo/productoModelo.php');

        $conn = new PDO('mysql:host=localhost;dbname=palomitas_dulces2', "root", "");
        $result = $conn->query("SELECT `id_producto`, `descrip_producto`, `precio_producto`, `categoria_producto` FROM `producto` WHERE categoria_producto = '$cate'");

        if (!$result) {
            echo "<p class='error'>ERROR: " . $conn->errorinfo()[2] . "</p>";
        }

        while ($row = $result->fetch()) {
            echo "<p>Productos relacionados:</p>";
            echo "<p>Identificación del producto: {$row['id_producto']}</p>";
            echo "<p>Descripción del producto: {$row['descrip_producto']}</p>";
            echo "<p>Precio: {$row['precio_producto']}</p>";
            echo "<p>siguiente producto</p>";
        }
    }
    
    ?>
    <a href="../vista/nuevoinicio.php"><button id="ola"> volver a inicio </button>
</body>
</html>

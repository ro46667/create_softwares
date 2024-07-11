<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-registro {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
            padding: 10px 10px 10px 35px;
            font-size: 16px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }
        .control:focus {
            border-color: #333333;
        }
        .button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            background-color: #0078d4;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #005a9e;
        }
        .link {
            color: #0078d4;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .link:hover {
            color: #005a9e;
        }
    </style>
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div class="form-registro">
            <h1>Regístrate aquí</h1>
            <form method="post" action="../controlador/registro.php">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="text" name="tdoc" placeholder="Tipo doc usuario">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="number" name="ndoc" placeholder="Num doc usuario">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="text" name="nom" placeholder="Nombre usuario">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="text" name="ape" placeholder="Apellido usuario">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="text" name="direc" placeholder="Dirección usuario">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="number" name="tel" placeholder="Teléfono usuario">
                </div>
                
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="control" type="text" name="corr" placeholder="Correo usuario">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input class="control" type="password" name="pass" placeholder="Contraseña">
                </div>

                <input type="submit" value="Regístrate" class="button">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>¿Ya tienes una cuenta? <a class="link" href="sesion.html">Iniciar Sesión</a></p>
                <p>Volver al inicio <a class="link" href="index.html">Inicio</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
require_once('conexiondb.php');

$conn = Conectarse();
$id = $_SESSION['id'];
$delete = $conn->exec("DELETE FROM `producto` WHERE id_producto = $id");

// Estilo y botones
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<style>';
echo 'body {';
echo '    font-family: Arial, sans-serif;';
echo '    background-color: #f4f4f4;';
echo '    margin: 0;';
echo '    padding: 0;';
echo '}';
echo '.mensaje {';
echo '    text-align: center;';
echo '    padding: 20px;';
echo '    margin: 50px auto;';
echo '    background-color: #fff;';
echo '    border-radius: 10px;';
echo '    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);';
echo '}';
echo '.exitoso {';
echo '    color: #28a745;';
echo '}';
echo '.fallo {';
echo '    color: #dc3545;';
echo '}';
echo '.boton {';
echo '    display: inline-block;';
echo '    padding: 10px 20px;';
echo '    font-size: 16px;';
echo '    margin-top: 20px;';
echo '    text-decoration: none;';
echo '    color: #fff;';
echo '    border-radius: 5px;';
echo '    transition: background-color 0.3s ease;';
echo '}';
echo '.exitoso-btn {';
echo '    background-color: #28a745;';
echo '}';
echo '.fallo-btn {';
echo '    background-color: #dc3545;';
echo '}';
echo '</style>';
echo '</head>';
echo '<body>';

echo '<div class="mensaje ' . ($delete ? 'exitoso' : 'fallo') . '">';
if (!$delete) {
    echo 'Fallo al eliminar el producto.';
} else {
    echo 'Producto eliminado exitosamente.';
}
echo '</div>';

// Botones
echo '<a href="../vista/eliminarproductos.php" class="boton ' . ($delete ? 'exitoso-btn' : 'fallo-btn') . '">probar otra vez</a>';
echo '<a href="../vista/inicioadmin.php" class="boton ' . ($delete ? 'exitoso-btn' : 'fallo-btn') . '">volver al inicio</a>';

echo '<script>';
echo 'function accionAdicional() {';
echo '    // Lógica para acción adicional';
echo '}';
echo '</script>';

echo '</body>';
echo '</html>';
?>

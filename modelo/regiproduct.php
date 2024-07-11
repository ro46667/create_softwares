<?php
$conn = new PDO('mysql:host=localhost;dbname=palomitas_dulces2',"root","");  try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=palomitas_dulces2','root','');
    $sql = "INSERT INTO producto (descrip_producto, precio_producto, categoria_producto) VALUES (:descrip_producto, :precio_producto, :categoria_producto)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':descrip_producto', $descripcion);
    $stmt->bindParam(':precio_producto', $precio);
    $stmt->bindParam(':categoria_producto', $categoria);
    
    
    $stmt->execute();
    
    echo "Datos insertados correctamente.";
} catch (PDOException $e) {
    echo "Error al insertar datos: " . $e->getMessage();
}

?>


  
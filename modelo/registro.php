<?php
$conn = new PDO('mysql:host=localhost;dbname=palomitas_dulces2',"root","");  try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=palomitas_dulces2','root','');
    $sql = "INSERT INTO usuario (tipo_doc_usuario, no_doc_usuario, nombre_usuario, apellido_usuario, direccion_usuario, telefono_usuario, correo_usuario, password_usuario) VALUES (:tipo_doc_usuario, :no_doc_usuario, :nombre_usuario, :apellido_usuario, :direccion_usuario, :telefono_usuario, :correo_usuario, :password_usuario)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tipo_doc_usuario', $tipo_doc_usuario);
    $stmt->bindParam(':no_doc_usuario', $no_doc_usuario);
    $stmt->bindParam(':nombre_usuario', $nombre_usuario);
    $stmt->bindParam(':apellido_usuario', $apellido_usuario);
    $stmt->bindParam(':direccion_usuario', $direccion_usuario);
    $stmt->bindParam(':telefono_usuario', $telefono_usuario);
    $stmt->bindParam(':correo_usuario', $correo_usuario);
    $stmt->bindParam(':password_usuario', $password_usuario);
    
    $stmt->execute();
    
    echo "Datos insertados correctamente.";
} catch (PDOException $e) {
    echo "Error al insertar datos: " . $e->getMessage();
}

?>


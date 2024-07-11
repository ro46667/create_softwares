<?php
	
	require_once ('conexiondb.php');
	$conn= conectarse();



	$upt = $conn->exec(" UPDATE `usuario` SET `tipo_doc_usuario`='$tipo_doc_usuario',`no_doc_usuario`='$no_doc_usuario',`nombre_usuario`='$nombre_usuario',`apellido_usuario`='$apellido_usuario',`direccion_usuario`='$direccion_usuario',`telefono_usuario`='$telefono_usuario',`correo_usuario`='$correo_usuario',`password_usuario`='$password_usuario' WHERE no_doc_usuario = $no_doc_usuario");

	if (!$upt)
	{
	print "<p> ERROR ".$conn->errorInfo(). "</p>";
	echo "olaaaaa";
	}
?>

<?php
	session_start();
	require_once ('../modelo/conexiondb.php');
	$db = Conectarse();
	$no_doc_usuario = $_POST['ndoc'];
	$password_usuario = $_POST['pass'];
	
	$stmt = $db->prepare("SELECT tipo_doc_usuario, no_doc_usuario, nombre_usuario, apellido_usuario, direccion_usuario, telefono_usuario, correo_usuario, password_usuario, estado_Usuario FROM usuario WHERE no_doc_usuario = :no_doc_usuario AND password_usuario = :password_usuario");

	$stmt->bindParam(':no_doc_usuario', $no_doc_usuario, PDO::PARAM_INT);
	$stmt->bindParam(':password_usuario', $password_usuario, PDO::PARAM_STR);
	
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if (!$result)
	{
		header("location:../vista/sesion.php");  
	}
	else
	{
		header("location:../vista/sesionexi.php");
	}
?>

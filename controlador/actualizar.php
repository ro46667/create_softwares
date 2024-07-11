<?php
session_start();
require_once ('../modelo/conexiondb.php');

$db= Conectarse();
$no_doc_usuario = $_POST['ndoc'];
$result = $db->query("SELECT `tipo_doc_usuario`, `no_doc_usuario`, `nombre_usuario`, `apellido_usuario`, `direccion_usuario`, `telefono_usuario`, `correo_usuario`, `password_usuario`, `estado_Usuario` FROM `usuario` WHERE no_doc_usuario = $no_doc_usuario");

if (!$result)
	{
		header("location:../vista/actualizar.html");  
	}else{
		header("location:../vista/actualizar.html");  
	}
	while ($row = $result->fetch())
	{
		$_SESSION['tdoc'] = $row[0];
		$_SESSION['ndoc'] = $row[1];
		$_SESSION['nom'] = $row[2];
		$_SESSION['ape'] = $row[3];
		$_SESSION['direc'] = $row[4];
		$_SESSION['tel'] = $row[5];
		$_SESSION['corr'] = $row[6];
		$_SESSION['pass'] = $row[7];		
		header("location:../vista/actualizarcli.html");
	}
?>


<?php
session_start();
require_once ('../modelo/conexiondb.php');

$db= Conectarse();
$no_doc_usuario = $_POST['ndoc'];
$result = $db->query("SELECT `nombre_usuario` FROM `usuario` WHERE no_doc_usuario = $no_doc_usuario");

if (!$result)
	{
		header("location:../vista/eliminar.php");  
	}else{
		header("location:../vista/eliminar.php");  
	}
	while ($row = $result->fetch())
	{
		$_SESSION['nom'] = $row[0];
		$_SESSION['ndoc'] = $no_doc_usuario;
		header("location:../vista/eliminarsure.php");
	}		
?>
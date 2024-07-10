<?php
session_start();
require_once ('../modelo/conexiondb.php');

$db= Conectarse();
$id = $_POST['id'];
$result = $db->query("SELECT `descrip_producto` FROM `producto` WHERE id_producto = $id");

if (!$result)
	{
		header("location:../vista/eliminarproductos.php");  
	}else{
		header("location:../vista/eliminarproductos.php");  
	}
	while ($row = $result->fetch())
	{
		$_SESSION['descrip'] = $row[0];
		$_SESSION['id'] = $id;
		header("location:../vista/eliminasonproduct.php");
	}		
?>


<?php

	if($_POST){

		$tipo_doc_usuario= $_POST['tdoc'];
		$no_doc_usuario= $_POST['ndoc'];
		$nombre_usuario= $_POST['nom'];
		$apellido_usuario= $_POST['ape'];
		$direccion_usuario= $_POST['direc'];
		$telefono_usuario= $_POST['tel'];
		$correo_usuario= $_POST['corr'];
		$password_usuario= $_POST['pass'];


		require_once("../modelo/updatecli.php");
		header('location:../vista/inicio.php');
	}


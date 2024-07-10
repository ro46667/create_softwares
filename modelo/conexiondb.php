<?php
function Conectarse()
{
	$servername = "localhost"; 
	$username = "root"; 
	$password = "";
	$dbname = "palomitas_dulces2"; 

	try {
    	
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $conn;
	} catch(PDOException $e) {
    	echo "Error en la conexión: " . $e->getMessage();
	}
}
?>




<?php 
$host = "localhost";
$bd = "taller_deportivo";
$username = "root";
$password = "";

try {

    $conexion = new PDO("mysql:host=$host; dbname=$bd", $username, $password);
	$conexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}

catch (PDOException $pe){
die ("No ha sido conectada la base $bd :" . $pe->getMessage());
}
?>
<?php
//echo "Hola mundo";
	$mysqli = new mysqli('localhost', 'root', '123456', 'restaurante_1');

	if($mysqli->connect_error){

		die('Error en la conexion'.$mysqli->connect_error);
	}
	
?>
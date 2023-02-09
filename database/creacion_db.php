<?php
	/* EJECUTAR UNA SOLA VEZ PARA CREAR LA BASE DE DATOS*/

	$servidor = "localhost";
	$nombre_usuario = "root";
	$contrasena = "123456";

	$conexion = new $mysqli($servidor, $nombre_usuario, $contrasena);

	if($conexion->connect_error){
		die("Conexion fallida: ".$conexion->connect_error);
	}

	$sql = "CREATE DATABASE restaurante_1";

	if($conexion->query($sql) === true){
		die("Base de datos creada exitosamente");
	}else{
		die("Error al crear la base de datos");
	}
?>
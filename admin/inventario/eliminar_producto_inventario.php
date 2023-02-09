<?php

	require '../conexion.php';

	$id = $_GET['id'];

	$consulta_eliminar_producto = "DELETE FROM inventario WHERE id = '$id'";

	$resultado = $mysqli->query($consulta_eliminar_producto);


	if($resultado){
		header('location:index.php?exito=Registro Borrado');
	}else{
		header('location:index.php?error=Error al borrar');
	}
?>
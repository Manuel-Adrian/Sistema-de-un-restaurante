<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM mesa1 WHERE id = '$id'";

	$resultado = $mysqli->query($sql);

	if($resultado == 1){
		$sql = "DELETE FROM mesa1_respaldo WHERE id = '$id'";
		$resultado2 = $mysqli->query($sql);
	}

	if($resultado){
		header('location:mesa1.php');
	}else{
		header('location:mesa1.php');
	}

?>

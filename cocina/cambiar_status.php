<?php
	require '../conexion.php';

	$id = $_GET['id'];
	$mesa = $_GET['mesa'];

	if($mesa == "MESA 1"){
		$cambiar_status = "UPDATE mesa1 SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado = $mysqli->query($cambiar_status);

		//MESA 1 RESPALDO/
		$cambiar_status1 = "UPDATE mesa1_respaldo SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado1 = $mysqli->query($cambiar_status1);

	}elseif($mesa == "MESA 2"){
		$cambiar_status = "UPDATE mesa2 SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado = $mysqli->query($cambiar_status);

		//MESA 2 RESPALDO/
		$cambiar_status1 = "UPDATE mesa2_respaldo SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado1 = $mysqli->query($cambiar_status1);

	}elseif($mesa == "MESA 3"){
		$cambiar_status = "UPDATE mesa3 SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado = $mysqli->query($cambiar_status);

		//MESA 3 RESPALDO/
		$cambiar_status1 = "UPDATE mesa3_respaldo SET status = 'EN ESPERA' WHERE id = '$id'";
		$resultado1 = $mysqli->query($cambiar_status1);

	}else{
		header('location:index.php');
	}


	//ELIMINAR PEDIDO //

	/*$sql = "DELETE FROM mesa1 WHERE id = '$id'";

	$resultado = $mysqli->query($sql);

	if($resultado == 1){
		$sql = "DELETE FROM mesa1_respaldo WHERE id = '$id'";
		$resultado2 = $mysqli->query($sql);
	}*/

	if($resultado&$resultado1){
		header('location:index.php');
	}else{
		header('location:index.php');
	}

?>

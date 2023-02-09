<?php
	require 'conexion.php';

	date_default_timezone_set("America/Mexico_City");
	$fecha_entrada = date("Y-m-d H:i:s");
	$efectivo = $_POST['efectivo'];
	$monto_pagar = $_POST['monto_pagar'];
	$cambio=$_POST['cambio'];

	$sql = "INSERT INTO comandas(fecha_entrada, monto_pagar, efectivo, cambio) VALUES('$fecha_entrada', '$monto_pagar', '$efectivo', '$cambio')";

	$resultado = $mysqli->query($sql);

	$cambiar_status = "UPDATE mesa1_respaldo SET status = 'FINALIZADO' WHERE status='EN ESPERA'";
	$resultado2 = $mysqli->query($cambiar_status);

	$sql3 = "DELETE FROM mesa1 WHERE status='EN ESPERA'";
	$resultado3 = $mysqli->query($sql3);

	if($resultado&&$resultado2&&$resultado3){
		header('location:mesa1.php');
	}else{
		header('location:mesa1.php');
	}
?>
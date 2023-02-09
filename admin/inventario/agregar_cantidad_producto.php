<?php

	require '../conexion.php';

	$id = $_POST['id'];
	$cantidad_agregar = $_POST['cantidad_agregar'];


	/*$consulta_inventario = "SELECT stock_inicial FROM inventario WHERE id = '$id'";
	$resultado_consulta = $mysqli->query($consulta_inventario);

	$resultado_stock = mysqli_fetch_assoc($resultado_consulta);*/

	////////////////////////////////////////////////////////////////////////

	//$stock_inicial = $resultado_stock['stock_inicial']+$cantidad_agregar;

	/////////////////////////////////////////////////////////////////////////

	$agregar_cantidad_producto = "UPDATE inventario SET stock_inicial=stock_inicial+'$cantidad_agregar' WHERE id = '$id'";

	$resultado = $mysqli->query($agregar_cantidad_producto);


	if($resultado){
		header('location:index.php?exito=Cantidad Agregada');
	}else{
		header('location:index.php?error=Error al agregar cantidad');
	}
?>
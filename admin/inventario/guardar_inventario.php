<?php
	require '../conexion.php';

	date_default_timezone_set("America/Mexico_City");
	$fecha_entrada = date("Y-m-d H:i:s");
	$producto = $_POST['producto'];
	$stock_inicial = $_POST['stock_inicial'];
	$stock_salida = 0;
	$total_stock = $stock_inicial;

	$validar_producto = "SELECT COUNT(producto) AS contador FROM inventario WHERE producto = '$producto'";
	$resultado1 = $mysqli->query($validar_producto);

	while ($row=$resultado1->fetch_array(MYSQLI_ASSOC)) {
		if ($row['contador']>=1) {
			header('location:index.php?duplicado=Registro Ya existente');
		}else{

			$sql = "INSERT INTO inventario(fecha_entrada, producto, stock_inicial, stock_salida, total_stock)
			VALUES('$fecha_entrada', '$producto', '$stock_inicial', '$stock_salida', '$total_stock')";
			$resultado = $mysqli->query($sql);

			//echo $fecha_entrada."-".$producto."-".$stock_inicial."-".$stock_salida."-".$total_stock;


			if($resultado){
				header('location:index.php?exito=Registro Exitoso');
			}else{
				header('location:index.php?error=Error al guardar');
			}
		}
	}

	

?>
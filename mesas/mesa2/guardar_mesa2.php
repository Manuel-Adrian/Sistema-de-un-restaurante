<?php
	require 'conexion.php';

	$fecha_entrada = $_POST['fecha_entrada'];
	$opt = $_POST['opt'];
	$cantidad = $_POST['cantidad'];
	$categoria = $_POST['categoria'];

								/*/ CATEGORIA COMIDA RAPIDA*/
	if($opt=="SOPA DE PASTA"){
		$precio = 60;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="ARROZ"){
		$precio = 35;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="TACOS"){
		$precio = 15;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}

								/*/ CATEGORIA CARNES*/
	if($opt=="ENCHILADA"){
		$precio = 250;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="ARRACHERA"){
		$precio = 400;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="CHULETA"){
		$precio = 200;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}

					/*/ CATEGORIA POLLOS*/
	if($opt=="ADOBO"){
		$precio = 250;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="ENCHILADO"){
		$precio = 350;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="A LA LEÑA"){
		$precio = 300;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}

				/*/ CATEGORIA PESCADOS*/
	if($opt=="EMPANIZADO"){
		$precio = 250;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="SALMON"){
		$precio = 550;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="CAMARON"){
		$precio = 250;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}

				/*/ CATEGORIA POSTRES*/
	if($opt=="FLAN"){
		$precio = 20;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="GELATINA"){
		$precio = 15;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="ARROZ CON LECHE"){
		$precio = 25;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}

					/*/ CATEGORIA BEBIDAS*/
	if($opt=="REFRESCOS"){
		$precio = 20;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="AGUAS"){
		$precio = 18;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}elseif($opt=="CERVEZA"){
		$precio = 30;
		$subtotal = 0;
		$subtotal = $cantidad * $precio;
		$mesa = "MESA 2";
		$status = "PREPARANDO";

		$sql = "INSERT INTO mesa2(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', '$precio', '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado = $mysqli->query($sql);

		$sql2 = "INSERT INTO mesa2_respaldo(categoria, opt, precio, fecha_entrada, cantidad, mesa, status, subtotal)
		VALUES('$categoria', '$opt', $precio, '$fecha_entrada', '$cantidad', '$mesa', '$status', '$subtotal')";
		$resultado2 = $mysqli->query($sql2);
	}


	if($resultado){
		header('location:mesa2.php');
	}else{
		header('location:mesa2.php');
	}

?>
<?php
	include '../conexion.php';

		/*PRODUCTOS SOPA DE PASTA*/
	
		/*	MESA 1*/
	$consulta_mesa1_sopa_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'SOPA DE PASTA' GROUP BY opt";
	$resultado_respaldo1_sopa = $mysqli->query($consulta_mesa1_sopa_respaldo);

	$valor_cantidad_sopa = mysqli_fetch_assoc($resultado_respaldo1_sopa);

	/*	MESA 2*/
	$consulta_mesa2_sopa_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'SOPA DE PASTA' GROUP BY opt";
	$resultado_respaldo2_sopa = $mysqli->query($consulta_mesa2_sopa_respaldo);

	$valor_cantidad_sopa2 = mysqli_fetch_assoc($resultado_respaldo2_sopa);

	/*	MESA 3*/
	$consulta_mesa3_sopa_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'SOPA DE PASTA' GROUP BY opt";
	$resultado_respaldo3_sopa = $mysqli->query($consulta_mesa3_sopa_respaldo);

	$valor_cantidad_sopa3 = mysqli_fetch_assoc($resultado_respaldo3_sopa);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_sopa = "SELECT stock_inicial FROM inventario WHERE producto = 'SOPA DE PASTA'";
	$resultado_inventario_sopa = $mysqli->query($consulta_inventario_sopa);

	$valor_stock_sopa = mysqli_fetch_assoc($resultado_inventario_sopa);

	///////////////////////////////////////////////////////////////////////////////////////////////

		/*SUMA DE LAS CANTIDADES DE PRODUCTOS POR LAS MESAS */ 
	$stock_salida = $valor_cantidad_sopa['cantidad_total'] + $valor_cantidad_sopa2['cantidad_total'] + $valor_cantidad_sopa3['cantidad_total'];
	$total_stock = ($valor_stock_sopa['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'SOPA DE PASTA'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS ARROZ*/
	
	/*	MESA1 */
	$consulta_mesa1_arroz_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ARROZ' GROUP BY opt";
	$resultado_respaldo1_arroz = $mysqli->query($consulta_mesa1_arroz_respaldo);

	$valor_cantidad_arroz = mysqli_fetch_assoc($resultado_respaldo1_arroz);


	/*	MESA 2 */
	$consulta_mesa2_arroz_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ARROZ' GROUP BY opt";
	$resultado_respaldo2_arroz = $mysqli->query($consulta_mesa2_arroz_respaldo);

	$valor_cantidad_arroz1 = mysqli_fetch_assoc($resultado_respaldo2_arroz);


	/*	MESA 3 */
	$consulta_mesa3_arroz_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ARROZ' GROUP BY opt";
	$resultado_respaldo3_arroz = $mysqli->query($consulta_mesa3_arroz_respaldo);

	$valor_cantidad_arroz2 = mysqli_fetch_assoc($resultado_respaldo3_arroz);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_arroz = "SELECT stock_inicial FROM inventario WHERE producto = 'ARROZ'";
	$resultado_inventario_arroz = $mysqli->query($consulta_inventario_arroz);

	$valor_stock_arroz = mysqli_fetch_assoc($resultado_inventario_arroz);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_arroz['cantidad_total'] +$valor_cantidad_arroz1['cantidad_total'] + $valor_cantidad_arroz2['cantidad_total'];
	$total_stock = ($valor_stock_arroz['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ARROZ'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS TACOS*/
	
	/*	MESA 1	*/
	$consulta_mesa1_tacos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'TACOS' GROUP BY opt";
	$resultado_respaldo1_tacos = $mysqli->query($consulta_mesa1_tacos_respaldo);

	$valor_cantidad_tacos = mysqli_fetch_assoc($resultado_respaldo1_tacos);


	/*	MESA 2	*/
	$consulta_mesa2_tacos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'TACOS' GROUP BY opt";
	$resultado_respaldo2_tacos = $mysqli->query($consulta_mesa2_tacos_respaldo);

	$valor_cantidad_tacos1 = mysqli_fetch_assoc($resultado_respaldo2_tacos);


	/*	MESA 3	*/
	$consulta_mesa3_tacos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'TACOS' GROUP BY opt";
	$resultado_respaldo3_tacos = $mysqli->query($consulta_mesa3_tacos_respaldo);

	$valor_cantidad_tacos2 = mysqli_fetch_assoc($resultado_respaldo3_tacos);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_tacos = "SELECT stock_inicial FROM inventario WHERE producto = 'TACOS'";
	$resultado_inventario_tacos = $mysqli->query($consulta_inventario_tacos);

	$valor_stock_tacos = mysqli_fetch_assoc($resultado_inventario_tacos);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_tacos['cantidad_total'] + $valor_cantidad_tacos1['cantidad_total'] + $valor_cantidad_tacos2['cantidad_total'];
	$total_stock = ($valor_stock_tacos['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'TACOS'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS CARNES ENCHILADA*/
	
	/*	MESA 1*/
	$consulta_mesa1_enchilada_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ENCHILADA' GROUP BY opt";
	$resultado_respaldo1_enchilada = $mysqli->query($consulta_mesa1_enchilada_respaldo);

	$valor_cantidad_enchilada = mysqli_fetch_assoc($resultado_respaldo1_enchilada);


	/*	MESA 2*/
	$consulta_mesa2_enchilada_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ENCHILADA' GROUP BY opt";
	$resultado_respaldo2_enchilada = $mysqli->query($consulta_mesa2_enchilada_respaldo);

	$valor_cantidad_enchilada1 = mysqli_fetch_assoc($resultado_respaldo2_enchilada);


	/*	MESA 3*/
	$consulta_mesa3_enchilada_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ENCHILADA' GROUP BY opt";
	$resultado_respaldo3_enchilada = $mysqli->query($consulta_mesa3_enchilada_respaldo);

	$valor_cantidad_enchilada2 = mysqli_fetch_assoc($resultado_respaldo3_enchilada);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_enchilada = "SELECT stock_inicial FROM inventario WHERE producto = 'ENCHILADA'";
	$resultado_inventario_enchilada = $mysqli->query($consulta_inventario_enchilada);

	$valor_stock_enchilada = mysqli_fetch_assoc($resultado_inventario_enchilada);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_enchilada['cantidad_total'] + $valor_cantidad_enchilada1['cantidad_total'] + $valor_cantidad_enchilada2['cantidad_total'];
	$total_stock = ($valor_stock_enchilada['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ENCHILADA'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS CARNES ARRACHERA*/
	
	// MESA 1
	$consulta_mesa1_arrachera_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ARRACHERA' GROUP BY opt";
	$resultado_respaldo1_arrachera = $mysqli->query($consulta_mesa1_arrachera_respaldo);

	$valor_cantidad_arrachera = mysqli_fetch_assoc($resultado_respaldo1_arrachera);


	// MESA 2
	$consulta_mesa2_arrachera_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ARRACHERA' GROUP BY opt";
	$resultado_respaldo2_arrachera = $mysqli->query($consulta_mesa2_arrachera_respaldo);

	$valor_cantidad_arrachera1 = mysqli_fetch_assoc($resultado_respaldo2_arrachera);

	// MESA 3
	$consulta_mesa3_arrachera_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ARRACHERA' GROUP BY opt";
	$resultado_respaldo3_arrachera = $mysqli->query($consulta_mesa3_arrachera_respaldo);

	$valor_cantidad_arrachera2 = mysqli_fetch_assoc($resultado_respaldo3_arrachera);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_arrachera = "SELECT stock_inicial FROM inventario WHERE producto = 'ARRACHERA'";
	$resultado_inventario_arrachera = $mysqli->query($consulta_inventario_arrachera);

	$valor_stock_arrachera = mysqli_fetch_assoc($resultado_inventario_arrachera);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_arrachera['cantidad_total'] + $valor_cantidad_arrachera1['cantidad_total'] + $valor_cantidad_arrachera2['cantidad_total'];
	$total_stock = ($valor_stock_arrachera['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ARRACHERA'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS CARNES CHULETA*/
	
	// MESA 1
	$consulta_mesa1_chuleta_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'CHULETA' GROUP BY opt";
	$resultado_respaldo1_chuleta = $mysqli->query($consulta_mesa1_chuleta_respaldo);

	$valor_cantidad_chuleta = mysqli_fetch_assoc($resultado_respaldo1_chuleta);


	// MESA 2
	$consulta_mesa2_chuleta_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'CHULETA' GROUP BY opt";
	$resultado_respaldo2_chuleta = $mysqli->query($consulta_mesa2_chuleta_respaldo);

	$valor_cantidad_chuleta1 = mysqli_fetch_assoc($resultado_respaldo2_chuleta);

	// MESA 3
	$consulta_mesa3_chuleta_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'CHULETA' GROUP BY opt";
	$resultado_respaldo3_chuleta = $mysqli->query($consulta_mesa3_chuleta_respaldo);

	$valor_cantidad_chuleta2 = mysqli_fetch_assoc($resultado_respaldo3_chuleta);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_chuleta = "SELECT stock_inicial FROM inventario WHERE producto = 'CHULETA'";
	$resultado_inventario_chuleta = $mysqli->query($consulta_inventario_chuleta);

	$valor_stock_chuleta = mysqli_fetch_assoc($resultado_inventario_chuleta);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_chuleta['cantidad_total'] + $valor_cantidad_chuleta1['cantidad_total'] + $valor_cantidad_chuleta2['cantidad_total'];
	$total_stock = ($valor_stock_chuleta['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'CHULETA'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS POLLOS ADOBO*/
	
	//	MESA 1
	$consulta_mesa1_adobo_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ADOBO' GROUP BY opt";
	$resultado_respaldo1_adobo = $mysqli->query($consulta_mesa1_adobo_respaldo);

	$valor_cantidad_adobo = mysqli_fetch_assoc($resultado_respaldo1_adobo);


	//	MESA 2
	$consulta_mesa2_adobo_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ADOBO' GROUP BY opt";
	$resultado_respaldo2_adobo = $mysqli->query($consulta_mesa2_adobo_respaldo);

	$valor_cantidad_adobo1 = mysqli_fetch_assoc($resultado_respaldo2_adobo);


	//	MESA 3
	$consulta_mesa3_adobo_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ADOBO' GROUP BY opt";
	$resultado_respaldo3_adobo = $mysqli->query($consulta_mesa3_adobo_respaldo);

	$valor_cantidad_adobo2 = mysqli_fetch_assoc($resultado_respaldo3_adobo);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_adobo = "SELECT stock_inicial FROM inventario WHERE producto = 'ADOBO'";
	$resultado_inventario_adobo = $mysqli->query($consulta_inventario_adobo);

	$valor_stock_adobo = mysqli_fetch_assoc($resultado_inventario_adobo);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_adobo['cantidad_total'] + $valor_cantidad_adobo1['cantidad_total'] + $valor_cantidad_adobo2['cantidad_total'];
	$total_stock = ($valor_stock_adobo['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ADOBO'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS POLLOS ENCHILADO*/
	
	// MESA 1
	$consulta_mesa1_enchilado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ENCHILADO' GROUP BY opt";
	$resultado_respaldo1_enchilado = $mysqli->query($consulta_mesa1_enchilado_respaldo);

	$valor_cantidad_enchilado = mysqli_fetch_assoc($resultado_respaldo1_enchilado);


	// MESA 2
	$consulta_mesa2_enchilado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ENCHILADO' GROUP BY opt";
	$resultado_respaldo2_enchilado = $mysqli->query($consulta_mesa2_enchilado_respaldo);

	$valor_cantidad_enchilado1 = mysqli_fetch_assoc($resultado_respaldo2_enchilado);


	// MESA 3
	$consulta_mesa3_enchilado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ENCHILADO' GROUP BY opt";
	$resultado_respaldo3_enchilado = $mysqli->query($consulta_mesa3_enchilado_respaldo);

	$valor_cantidad_enchilado2 = mysqli_fetch_assoc($resultado_respaldo3_enchilado);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_enchilado = "SELECT stock_inicial FROM inventario WHERE producto = 'ENCHILADO'";
	$resultado_inventario_enchilado = $mysqli->query($consulta_inventario_enchilado);

	$valor_stock_enchilado = mysqli_fetch_assoc($resultado_inventario_enchilado);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_enchilado['cantidad_total'] + $valor_cantidad_enchilado1['cantidad_total'] + $valor_cantidad_enchilado2['cantidad_total'];
	$total_stock = ($valor_stock_enchilado['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ENCHILADO'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS POLLOS A LA LEÑA*/
	
	// MESA 1
	$consulta_mesa1_lena_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'A LA LEÑA' GROUP BY opt";
	$resultado_respaldo1_lena = $mysqli->query($consulta_mesa1_lena_respaldo);

	$valor_cantidad_lena = mysqli_fetch_assoc($resultado_respaldo1_lena);


	// MESA 2
	$consulta_mesa2_lena_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'A LA LEÑA' GROUP BY opt";
	$resultado_respaldo2_lena = $mysqli->query($consulta_mesa2_lena_respaldo);

	$valor_cantidad_lena1 = mysqli_fetch_assoc($resultado_respaldo2_lena);


	// MESA 3
	$consulta_mesa3_lena_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'A LA LEÑA' GROUP BY opt";
	$resultado_respaldo3_lena = $mysqli->query($consulta_mesa3_lena_respaldo);

	$valor_cantidad_lena2 = mysqli_fetch_assoc($resultado_respaldo3_lena);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_lena = "SELECT stock_inicial FROM inventario WHERE producto = 'A LA LEÑA'";
	$resultado_inventario_lena = $mysqli->query($consulta_inventario_lena);

	$valor_stock_lena = mysqli_fetch_assoc($resultado_inventario_lena);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_lena['cantidad_total'] + $valor_cantidad_lena1['cantidad_total'] + $valor_cantidad_lena2['cantidad_total'];
	$total_stock = ($valor_stock_lena['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'A LA LEÑA'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS PESCADOS EMPANIZADO*/
	
	// MESA 1
	$consulta_mesa1_empanizado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'EMPANIZADO' GROUP BY opt";
	$resultado_respaldo1_empanizado = $mysqli->query($consulta_mesa1_empanizado_respaldo);

	$valor_cantidad_empanizado = mysqli_fetch_assoc($resultado_respaldo1_empanizado);


	// MESA 2
	$consulta_mesa2_empanizado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'EMPANIZADO' GROUP BY opt";
	$resultado_respaldo2_empanizado = $mysqli->query($consulta_mesa2_empanizado_respaldo);

	$valor_cantidad_empanizado1 = mysqli_fetch_assoc($resultado_respaldo2_empanizado);


	// MESA 3
	$consulta_mesa3_empanizado_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'EMPANIZADO' GROUP BY opt";
	$resultado_respaldo3_empanizado = $mysqli->query($consulta_mesa3_empanizado_respaldo);

	$valor_cantidad_empanizado2 = mysqli_fetch_assoc($resultado_respaldo3_empanizado);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_empanizado = "SELECT stock_inicial FROM inventario WHERE producto = 'EMPANIZADO'";
	$resultado_inventario_empanizado = $mysqli->query($consulta_inventario_empanizado);

	$valor_stock_empanizado = mysqli_fetch_assoc($resultado_inventario_empanizado);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_empanizado['cantidad_total'] + $valor_cantidad_empanizado1['cantidad_total'] + $valor_cantidad_empanizado2['cantidad_total'];
	$total_stock = ($valor_stock_empanizado['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'EMPANIZADO'";
	$resultado2 = $mysqli->query($sql);





	/*PRODUCTOS PESCADOS SALMON*/
	
	// MESA 1
	$consulta_mesa1_salmon_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'SALMON' GROUP BY opt";
	$resultado_respaldo1_salmon = $mysqli->query($consulta_mesa1_salmon_respaldo);

	$valor_cantidad_salmon = mysqli_fetch_assoc($resultado_respaldo1_salmon);


	// MESA 2
	$consulta_mesa2_salmon_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'SALMON' GROUP BY opt";
	$resultado_respaldo2_salmon = $mysqli->query($consulta_mesa2_salmon_respaldo);

	$valor_cantidad_salmon1 = mysqli_fetch_assoc($resultado_respaldo2_salmon);


	// MESA 3
	$consulta_mesa3_salmon_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'SALMON' GROUP BY opt";
	$resultado_respaldo3_salmon = $mysqli->query($consulta_mesa3_salmon_respaldo);

	$valor_cantidad_salmon2 = mysqli_fetch_assoc($resultado_respaldo3_salmon);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_salmon = "SELECT stock_inicial FROM inventario WHERE producto = 'SALMON'";
	$resultado_inventario_salmon = $mysqli->query($consulta_inventario_salmon);

	$valor_stock_salmon = mysqli_fetch_assoc($resultado_inventario_salmon);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_salmon['cantidad_total'] + $valor_cantidad_salmon1['cantidad_total'] + $valor_cantidad_salmon2['cantidad_total'];
	$total_stock = ($valor_stock_salmon['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'SALMON'";
	$resultado2 = $mysqli->query($sql);




	/*PRODUCTOS PESCADOS CAMARON*/
	
	// MESA 1
	$consulta_mesa1_camaron_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'CAMARON' GROUP BY opt";
	$resultado_respaldo1_camaron = $mysqli->query($consulta_mesa1_camaron_respaldo);

	$valor_cantidad_camaron = mysqli_fetch_assoc($resultado_respaldo1_camaron);


	// MESA 2
	$consulta_mesa2_camaron_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'CAMARON' GROUP BY opt";
	$resultado_respaldo2_camaron = $mysqli->query($consulta_mesa2_camaron_respaldo);

	$valor_cantidad_camaron1 = mysqli_fetch_assoc($resultado_respaldo2_camaron);


	// MESA 3
	$consulta_mesa3_camaron_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'CAMARON' GROUP BY opt";
	$resultado_respaldo3_camaron = $mysqli->query($consulta_mesa3_camaron_respaldo);

	$valor_cantidad_camaron2 = mysqli_fetch_assoc($resultado_respaldo3_camaron);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_camaron = "SELECT stock_inicial FROM inventario WHERE producto = 'CAMARON'";
	$resultado_inventario_camaron = $mysqli->query($consulta_inventario_camaron);

	$valor_stock_camaron = mysqli_fetch_assoc($resultado_inventario_camaron);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_camaron['cantidad_total'] + $valor_cantidad_camaron1['cantidad_total'] + $valor_cantidad_camaron2['cantidad_total'];
	$total_stock = ($valor_stock_camaron['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'CAMARON'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS POSTRES FLAN*/
	
	// MESA 1
	$consulta_mesa1_flan_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'FLAN' GROUP BY opt";
	$resultado_respaldo1_flan = $mysqli->query($consulta_mesa1_flan_respaldo);

	$valor_cantidad_flan = mysqli_fetch_assoc($resultado_respaldo1_flan);


	// MESA 2
	$consulta_mesa2_flan_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'FLAN' GROUP BY opt";
	$resultado_respaldo2_flan = $mysqli->query($consulta_mesa2_flan_respaldo);

	$valor_cantidad_flan1 = mysqli_fetch_assoc($resultado_respaldo2_flan);


	// MESA 3
	$consulta_mesa3_flan_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'FLAN' GROUP BY opt";
	$resultado_respaldo3_flan = $mysqli->query($consulta_mesa3_flan_respaldo);

	$valor_cantidad_flan2 = mysqli_fetch_assoc($resultado_respaldo3_flan);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_flan = "SELECT stock_inicial FROM inventario WHERE producto = 'FLAN'";
	$resultado_inventario_flan = $mysqli->query($consulta_inventario_flan);

	$valor_stock_flan = mysqli_fetch_assoc($resultado_inventario_flan);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_flan['cantidad_total'] + $valor_cantidad_flan1['cantidad_total'] + $valor_cantidad_flan2['cantidad_total'];
	$total_stock = ($valor_stock_flan['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'FLAN'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS POSTRES GELATINA*/
	
	// MESA 1
	$consulta_mesa1_gelatina_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'GELATINA' GROUP BY opt";
	$resultado_respaldo1_gelatina = $mysqli->query($consulta_mesa1_gelatina_respaldo);

	$valor_cantidad_gelatina = mysqli_fetch_assoc($resultado_respaldo1_gelatina);


	// MESA 2
	$consulta_mesa2_gelatina_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'GELATINA' GROUP BY opt";
	$resultado_respaldo2_gelatina = $mysqli->query($consulta_mesa2_gelatina_respaldo);

	$valor_cantidad_gelatina1 = mysqli_fetch_assoc($resultado_respaldo2_gelatina);


	// MESA 3
	$consulta_mesa3_gelatina_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'GELATINA' GROUP BY opt";
	$resultado_respaldo3_gelatina = $mysqli->query($consulta_mesa3_gelatina_respaldo);

	$valor_cantidad_gelatina2 = mysqli_fetch_assoc($resultado_respaldo3_gelatina);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_gelatina = "SELECT stock_inicial FROM inventario WHERE producto = 'GELATINA'";
	$resultado_inventario_gelatina = $mysqli->query($consulta_inventario_gelatina);

	$valor_stock_gelatina = mysqli_fetch_assoc($resultado_inventario_gelatina);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_gelatina['cantidad_total'] + $valor_cantidad_gelatina1['cantidad_total'] + $valor_cantidad_gelatina2['cantidad_total'];
	$total_stock = ($valor_stock_gelatina['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'GELATINA'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS POSTRES ARROZ CON LECHE*/
	
	// MESA 1
	$consulta_mesa1_acleche_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'ARROZ CON LECHE' GROUP BY opt";
	$resultado_respaldo1_acleche = $mysqli->query($consulta_mesa1_acleche_respaldo);

	$valor_cantidad_acleche = mysqli_fetch_assoc($resultado_respaldo1_acleche);


	// MESA 2
	$consulta_mesa2_acleche_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'ARROZ CON LECHE' GROUP BY opt";
	$resultado_respaldo2_acleche = $mysqli->query($consulta_mesa2_acleche_respaldo);

	$valor_cantidad_acleche1 = mysqli_fetch_assoc($resultado_respaldo2_acleche);


	// MESA 3
	$consulta_mesa3_acleche_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'ARROZ CON LECHE' GROUP BY opt";
	$resultado_respaldo3_acleche = $mysqli->query($consulta_mesa3_acleche_respaldo);

	$valor_cantidad_acleche2 = mysqli_fetch_assoc($resultado_respaldo3_acleche);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_acleche = "SELECT stock_inicial FROM inventario WHERE producto = 'ARROZ CON LECHE'";
	$resultado_inventario_acleche = $mysqli->query($consulta_inventario_acleche);

	$valor_stock_acleche = mysqli_fetch_assoc($resultado_inventario_acleche);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_acleche['cantidad_total'] + $valor_cantidad_acleche1['cantidad_total'] + $valor_cantidad_acleche2['cantidad_total'];
	$total_stock = ($valor_stock_acleche['stock_inicial']-$stock_salida);

	/*RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'ARROZ CON LECHE'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS REFRESCOS*/
	
	// MESA 1
	$consulta_mesa1_refrescos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'REFRESCOS' GROUP BY opt";
	$resultado_respaldo1_refrescos = $mysqli->query($consulta_mesa1_refrescos_respaldo);

	$valor_cantidad_refrescos = mysqli_fetch_assoc($resultado_respaldo1_refrescos);


	// MESA 2
	$consulta_mesa2_refrescos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'REFRESCOS' GROUP BY opt";
	$resultado_respaldo2_refrescos = $mysqli->query($consulta_mesa2_refrescos_respaldo);

	$valor_cantidad_refrescos1 = mysqli_fetch_assoc($resultado_respaldo2_refrescos);


	// MESA 3
	$consulta_mesa3_refrescos_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'REFRESCOS' GROUP BY opt";
	$resultado_respaldo3_refrescos = $mysqli->query($consulta_mesa3_refrescos_respaldo);

	$valor_cantidad_refrescos2 = mysqli_fetch_assoc($resultado_respaldo3_refrescos);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_refrescos = "SELECT stock_inicial FROM inventario WHERE producto = 'REFRESCOS'";
	$resultado_inventario_refrescos = $mysqli->query($consulta_inventario_refrescos );

	$valor_stock_refrescos = mysqli_fetch_assoc($resultado_inventario_refrescos);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_refrescos['cantidad_total'] + $valor_cantidad_refrescos1['cantidad_total'] + $valor_cantidad_refrescos2['cantidad_total'];
	$total_stock = $valor_stock_refrescos['stock_inicial']-$stock_salida;


	/**RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'REFRESCOS'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS CERVEZA*/
	
	// MESA 1
	$consulta_mesa1_cerveza_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'CERVEZA' GROUP BY opt";
	$resultado_respaldo1_cerveza = $mysqli->query($consulta_mesa1_cerveza_respaldo);

	$valor_cantidad_cerveza = mysqli_fetch_assoc($resultado_respaldo1_cerveza);


	// MESA 2
	$consulta_mesa2_cerveza_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'CERVEZA' GROUP BY opt";
	$resultado_respaldo2_cerveza = $mysqli->query($consulta_mesa2_cerveza_respaldo);

	$valor_cantidad_cerveza1 = mysqli_fetch_assoc($resultado_respaldo2_cerveza);


	// MESA 3
	$consulta_mesa3_cerveza_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'CERVEZA' GROUP BY opt";
	$resultado_respaldo3_cerveza = $mysqli->query($consulta_mesa3_cerveza_respaldo);

	$valor_cantidad_cerveza2= mysqli_fetch_assoc($resultado_respaldo3_cerveza);

	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_cerveza = "SELECT stock_inicial FROM inventario WHERE producto = 'CERVEZA'";
	$resultado_inventario_cerveza = $mysqli->query($consulta_inventario_cerveza );

	$valor_stock_cerveza = mysqli_fetch_assoc($resultado_inventario_cerveza);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_cerveza['cantidad_total'] + $valor_cantidad_cerveza1['cantidad_total'] + $valor_cantidad_cerveza2['cantidad_total'];
	$total_stock = $valor_stock_cerveza['stock_inicial']-$stock_salida;


	/**RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'CERVEZA'";
	$resultado2 = $mysqli->query($sql);



	/*PRODUCTOS AGUAS*/
	
	// mesa 1
	$consulta_mesa1_aguas_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa1_respaldo WHERE opt = 'AGUAS' GROUP BY opt";
	$resultado_respaldo1_aguas = $mysqli->query($consulta_mesa1_aguas_respaldo);

	$valor_cantidad_aguas = mysqli_fetch_assoc($resultado_respaldo1_aguas);


	// mesa 2
	$consulta_mesa2_aguas_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa2_respaldo WHERE opt = 'AGUAS' GROUP BY opt";
	$resultado_respaldo2_aguas = $mysqli->query($consulta_mesa2_aguas_respaldo);

	$valor_cantidad_aguas1 = mysqli_fetch_assoc($resultado_respaldo2_aguas);


	// mesa 3
	$consulta_mesa3_aguas_respaldo = "SELECT opt, SUM(cantidad) AS cantidad_total  FROM mesa3_respaldo WHERE opt = 'AGUAS' GROUP BY opt";
	$resultado_respaldo3_aguas = $mysqli->query($consulta_mesa3_aguas_respaldo);

	$valor_cantidad_aguas2 = mysqli_fetch_assoc($resultado_respaldo3_aguas);


	/////////////////////////////////////////////////////////////////////////

	$consulta_inventario_aguas = "SELECT stock_inicial FROM inventario WHERE producto = 'AGUAS'";
	$resultado_inventario_aguas = $mysqli->query($consulta_inventario_aguas );

	$valor_stock_aguas = mysqli_fetch_assoc($resultado_inventario_aguas);

	///////////////////////////////////////////////////////////////////////////////////////////////

	$stock_salida = $valor_cantidad_aguas['cantidad_total'] + $valor_cantidad_aguas1['cantidad_total'] + $valor_cantidad_aguas2['cantidad_total'];
	$total_stock = $valor_stock_aguas['stock_inicial']-$stock_salida;


	/**RESTANDO INEVNTARIO - MESAS*/
	$sql = "UPDATE inventario SET total_stock = '$total_stock', stock_salida = '$stock_salida' WHERE producto = 'AGUAS'";
	$resultado2 = $mysqli->query($sql);

	


?>
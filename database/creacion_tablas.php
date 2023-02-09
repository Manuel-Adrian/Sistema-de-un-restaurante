<?php
	require '../conexion.php';

	function creacionTablas($consulta_sql){
		if($mysqli->query($consulta_sql) === true){

			die('TABLAS INSERTADAS CORRECTAMENTE<br>');

		}else{

			die('EROR AL CREAR LAS TABLAS: '.$mysqli->error.'<br>');
		}
	}

	$sql_tabla_mesa_1 = "CREATE TABLE mesa1 (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_1);

	$sql_tabla_mesa_1_respaldo = "CREATE TABLE mesa2_respaldo (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_1_respaldo);

	/**MESA 2*/
	$sql_tabla_mesa_2 = "CREATE TABLE mesa2 (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_2);

	$sql_tabla_mesa_2_respaldo = "CREATE TABLE mesa2_respaldo (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_2_respaldo);


	/**MESA 3*/
	$sql_tabla_mesa_3 = "CREATE TABLE mesa3 (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_3);

	$sql_tabla_mesa_3_respaldo = "CREATE TABLE mesa2_respaldo (id int PRIMARY KEY auto_increment,
	categoria varchar(50), opt varchar(50),
	precio int, fecha_entrada varchar(20), cantidad int,
	mesa varchar(20), status varchar(50), subtotal int
	)";

	creacionTablas($sql_tabla_mesa_3_respaldo);

	/**COMANDAS*/
	$sql_tabla_comandas = "CREATE TABLE comandas (id int PRIMARY KEY auto_increment,
	fecha_entrada varchar(20), monto_pagar int, efectivo int,
	cambio int
	)";

	creacionTablas($sql_tabla_comandas);

	$sql_tabla_inventario = "CREATE TABLE inventario(id int PRIMARY KEY auto_increment,
	fecha_entrada varchar(20),opt varchar(50), stock_inicial int,
	stock_salida int, total_stock int 
	)";

	creacionTablas($sql_tabla_inventario);

	$sql_tabla_usuarios= "CREATE TABLE users(id int PRIMARY KEY auto_increment, 
	nombre varchar(20), apellidos varchar(50),
	correo varchar(100), contraseña varchar(50),
	rol varchar(20)
	)";

	creacionTablas($sql_tabla_usuarios);


	/*INSERCCION DE USUARIOS*/

	$sql_rol_admin = "INSERT INTO users(nombre, apellidos, correo, contrasena, rol)VALUES(
	'DIEGO', 'LOPEZ GARCIA', 'diego@admin.com', 'adminadmin', 'ADMINISTRADOR'
	)";
		$resultado = $mysqli->query($sql_rol_admin);

	$sql_rol_cocinero = "INSERT INTO users(nombre, apellidos, correo, contrasena, rol)VALUES(
	'SUSANA', 'CASTILLO TORRES', 'su@correo.com', '123456', 'COCINERO'
	)";
		$resultado1 = $mysqli->query($sql_rol_cocinero);


	$sql_rol_mesero = "INSERT INTO users(nombre, apellidos, correo, contrasena, rol)VALUES(
	'OCTAVIO', 'MUÑOZ GARCIA', 'octa@correo.com', '123456', 'MESERO'
	)";
		$resultado2 = $mysqli->query($sql_rol_mesero);
?>
<?php
	include '../conexion.php';

	/*MESA 1 */
	$sql = "SELECT * FROM mesa1_respaldo ORDER BY id DESC LIMIT 10";
	$resultado = $mysqli->query($sql);

	$consulta_suma_mesa1 = "SELECT SUM(subtotal) AS total_mesa1 FROM mesa1_respaldo";
	$resultado_consulta = $mysqli->query($consulta_suma_mesa1);
	$total = mysqli_fetch_assoc($resultado_consulta);

	/*MESA 2 */
	$sql2 = "SELECT * FROM mesa2_respaldo ORDER BY id DESC LIMIT 10";
	$resultado1 = $mysqli->query($sql2);

	$consulta_suma_mesa2 = "SELECT SUM(subtotal) AS total_mesa2 FROM mesa2_respaldo";
	$resultado_consulta2 = $mysqli->query($consulta_suma_mesa2);
	$total2 = mysqli_fetch_assoc($resultado_consulta2);

	/*MESA 3 */
	$sql3 = "SELECT * FROM mesa3_respaldo ORDER BY id DESC LIMIT 10";
	$resultado2 = $mysqli->query($sql3);

	$consulta_suma_mesa3 = "SELECT SUM(subtotal) AS total_mesa3 FROM mesa3_respaldo";
	$resultado_consulta3 = $mysqli->query($consulta_suma_mesa3);
	$total3 = mysqli_fetch_assoc($resultado_consulta3);

?>
<?php
	session_start();
		if($_SESSION['rol'] === 'ADMINISTRADOR'){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fondo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<title>Administrador</title>
		<link href="../../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	    <script src="../../mesas/librerias/js/jquery-3.1.1.min.js"></script>
	    <script src="../../mesas/librerias/js/bootstrap.min.js"></script>
	</head>
	<style>
		
		.contenedor{

			padding-top: 50px;

		}
	</style>
	<body style="background-image: url('../../image/12.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">

		<nav class="navbar navbar-expand-lg bg-secondary">
			<div class="container-fluid">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>Menú
			    </button>
			    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			     	<a class="navbar-brand" href="../ganancias/">Ganacias</a>
				    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="navbar-brand">
				          <a class="nav-link active" aria-current="page" href="index.php">Ventas</a>
				        </li>
				        <li class="navbar-brand">
				          <a class="nav-link active" href="../inventario/index.php">Inventario</a>
				        </li>
				        <li class="navbar-brand">
				          <a class="nav-link active" href="../reporte/pdfxmes.php">Reporte</a>
				        </li>
			      	</ul>
			      	<div class="d-flex justify-content-between">
				        <div class="p-2"><a href="../" class="btn btn-light">ADMINISTRADOR</a></div>
				        <div class="p-2"><a href="../logout.php" class="btn btn-success">Salir</a></div>
			      	</div>
			    </div>
		  	</div>
		</nav>	
		<div class="container contenedor">
			<h1 class="titulo display-5 text-center" style="color: white;"> VENTAS</h1><br>
			<!------------VENTAS MESA1-------------->
			<div style="background: #67af47; color:black;" class="card mb-3">	
				<h4 class="text-center">Últimas 10 Ventas Mesa 1 </h4>
			</div> <br>

			<div class="container table-responsive">
				<table class="table table-sm table-dark">
					<thead class="thead-light">
						<tr>
							<th>FECHA DE <br>ENTRADA</th>
							<th>PRODUCTO</th>
							<th>PRECIO</th>
							<th>CANTIDAD</th>
							<th>SUBTOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {	
						?>
							<tr>
								<th><?php echo $row['fecha_entrada']; ?></th>
								<th><?php echo $row['opt']; ?></th>
								<th>$<?php echo $row['precio']; ?></th>
								<th><?php echo $row['cantidad']; ?></th>
								<th>$<?php echo $row['subtotal']; ?></th>
							</tr>
						<?php } ?>
					</tbody>
					<tr class="thead-light">
						<th colspan="4"></th>
						<th>VENTAS TOTALES <br>$<?php echo  $total['total_mesa1'];?></th>
					</tr>
				</table>
			</div>
			<br><br>


			<!------------VENTAS MESA2-------------->
			<div style="background: #33BBFF; color:black;" class="card mb-3">	
				<h4 class="text-center">Últimas 10 Ventas Mesa 2 </h4>
			</div> <br>

			<div class="container table-responsive">
				<table class="table table-sm table-dark">
					<thead class="thead-light">
						<tr>
							<th>FECHA DE <br>ENTRADA</th>
							<th>PRODUCTO</th>
							<th>PRECIO</th>
							<th>CANTIDAD</th>
							<th>SUBTOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($fila=$resultado1->fetch_array(MYSQLI_ASSOC)) {	
						?>
							<tr>
								<th><?php echo $fila['fecha_entrada']; ?></th>
								<th><?php echo $fila['opt']; ?></th>
								<th>$<?php echo $fila['precio']; ?></th>
								<th><?php echo $fila['cantidad']; ?></th>
								<th>$<?php echo $fila['subtotal']; ?></th>
							</tr>
						<?php } ?>
					</tbody>
					<tr class="thead-light">
						<th colspan="4"></th>
						<th>VENTAS TOTALES <br>$<?php echo  $total2['total_mesa2'];?></th>
					</tr>
				</table>
			</div>
			 <br><br>

			<!------------VENTAS MESA3-------------->
			<div style="background: #FFAF33; color:black;" class="card mb-3">	
				<h4 class="text-center">Últimas 10 Ventas Mesa 3 </h4>
			</div> <br>

			<div class="container table-responsive">
				<table class="table table-sm table-dark">
					<thead class="thead-light">
						<tr>
							<th>FECHA DE <br>ENTRADA</th>
							<th>PRODUCTO</th>
							<th>PRECIO</th>
							<th>CANTIDAD</th>
							<th>SUBTOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($campo=$resultado2->fetch_array(MYSQLI_ASSOC)) {	
						?>
							<tr>
								<th><?php echo $campo['fecha_entrada']; ?></th>
								<th><?php echo $campo['opt']; ?></th>
								<th>$<?php echo $campo['precio']; ?></th>
								<th><?php echo $campo['cantidad']; ?></th>
								<th>$<?php echo $campo['subtotal']; ?></th>
							</tr>
						<?php } ?>
					</tbody>
					<tr class="thead-light">
						<th colspan="4"></th>
						<th>VENTAS TOTALES <br>$<?php echo  $total3['total_mesa3'];?></th>
					</tr>
				</table>
			</div>
			
		</div>
			

	</body>


	</html>
<?php
		}
		elseif($_SESSION['rol'] != 'ADMINISTRADOR'){
			header("Location: ../../index1.php");
		}
		else{

			header("Location: ../../index.php");
			exit();
		  }
?>
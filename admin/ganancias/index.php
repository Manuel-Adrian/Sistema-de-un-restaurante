<?php
	require '../conexion.php';

	/*	MESA 1	*/
	$consulta_mesa1 = "SELECT SUM(subtotal) AS total_mesa1 FROM mesa1_respaldo";

	$resultado_mesa1 = $mysqli->query($consulta_mesa1);

	$total_mesa1 = mysqli_fetch_assoc($resultado_mesa1);

	/*	MESA 2	*/
	$consulta_mesa2 = "SELECT SUM(subtotal) AS total_mesa2 FROM mesa2_respaldo";

	$resultado_mesa2 = $mysqli->query($consulta_mesa2);

	$total_mesa2 = mysqli_fetch_assoc($resultado_mesa2);

	/*	MESA 3	*/
	$consulta_mesa3 = "SELECT SUM(subtotal) AS total_mesa3 FROM mesa3_respaldo";

	$resultado_mesa3 = $mysqli->query($consulta_mesa3);

	$total_mesa3 = mysqli_fetch_assoc($resultado_mesa3);

	/*	SUMAS DE LAS MESAS PARA SACAR LAS GANANCIAS	*/

	$mesa1 = $total_mesa1['total_mesa1'];
	$mesa2 = $total_mesa2['total_mesa2'];
	$mesa3 = $total_mesa3['total_mesa3'];
	$ganancias = $mesa1 + $mesa2 + $mesa3;
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
		<title>Ganacias</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
				          <a class="nav-link active" aria-current="page" href="../ventas/index.php">Ventas</a>
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
		<div class="contenedor">

			<h1 class="display-5 text-center" style="background: white;"> GANANCIAS</h1><br>

			<div class="row d-flex justify-content-evenly">
				<div class="col-lg-3">
					<div class="card text-bg-dark border-light" style="width: 18rem;">
						 <div class="card-body">
						 	<center>
						 		<h5 class="card-title">Ventas Mesa 1</h5>
						    	<p class="btn btn-success">$ <?php echo $mesa1; ?> pesos</p>
						 	</center>
						 </div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="card text-bg-dark border-light" style="width: 18rem;">
						 <div class="card-body">
						 	<center>
						 		<h5 class="card-title">Ventas Mesa 2</h5>
						    	<p class="btn btn-success">$ <?php echo $mesa2; ?> pesos</p>
						 	</center>
						 </div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="card text-bg-dark border-light" style="width: 18rem;">
						 <div class="card-body">
						 	<center>
						 		<h5 class="card-title">Ventas Mesa 3</h5>
						    	<p class="btn btn-success">$ <?php echo $mesa3; ?> pesos</p>
						 	</center>
						 </div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<center>
					<div class="col-lg-3">
						<div class="card border-dark mb-3" style="width: 18rem;">
							 <div class="card-body">
							 	<center>
							 		<div class="card-header"><h5 class="card-title">Ganacias Totales</h5></div>
							    	<p class="btn btn-outline-dark">$ <?php echo $ganancias; ?> pesos</p>
							 	</center>
							 </div>
						</div>
					</div>
				</center>
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
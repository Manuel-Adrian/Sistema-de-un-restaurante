<?php
	include 'conexion.php';

	$consulta_platillos = "SELECT producto, stock_salida FROM inventario ORDER BY stock_salida DESC LIMIT 5";
	$query_consulta = $mysqli->query($consulta_platillos);
	//$total = mysqli_fetch_assoc($resultado_consulta);

	while ($row=$query_consulta ->fetch_array(MYSQLI_ASSOC)) {	
		$labels[] = $row['producto'];
		$stock_salida [ ] = $row['stock_salida'];
	}

	$consulta_suma_mesa1 = "SELECT SUM(subtotal) AS total_mesa1 FROM mesa1_respaldo";
	$resultado_consulta = $mysqli->query($consulta_suma_mesa1);
	$total = mysqli_fetch_assoc($resultado_consulta);

	/*MESA 2 */
	$consulta_suma_mesa2 = "SELECT SUM(subtotal) AS total_mesa2 FROM mesa2_respaldo";
	$resultado_consulta2 = $mysqli->query($consulta_suma_mesa2);
	$total2 = mysqli_fetch_assoc($resultado_consulta2);

	/*MESA 3 */
	$consulta_suma_mesa3 = "SELECT SUM(subtotal) AS total_mesa3 FROM mesa3_respaldo";
	$resultado_consulta3 = $mysqli->query($consulta_suma_mesa3);
	$total3 = mysqli_fetch_assoc($resultado_consulta3);
	

	$consulta= "SELECT SUM(monto_pagar) AS total  FROM comandas";
	$resultado = $mysqli->query($consulta);
	$total_comandas = mysqli_fetch_assoc($resultado);
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
		<link href="../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	    <script src="../mesas/librerias/js/jquery-3.1.1.min.js"></script>
	    <script src="../mesas/librerias/js/bootstrap.min.js"></script>
	</head>
	<style>
		
		.contenedor{

			padding-top: 50px;

		}
	</style>
	<body style="background-image: url('../image/12.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
		<?php
			require_once('menu.php');
		?>
		
		<div class="container contenedor">
			<h1 class="titulo display-5" style="color: white;"> BIENVENIDO ADMINISTRADOR <?php echo $_SESSION['nombre'];?></h1><br><br>
			<div class="d-flex justify-content-center row">
				<div class="col-sm-6">
					<div class="card text-bg-dark border-light">
						<div class="card-body">
							<h5 class="card-title border">PLATILLOS MÁS VENDIDOS</h5>
								<div style="height: 40%;">
							  		<canvas id="myChart"></canvas>
								</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				  <div class="col-sm-6">
				    <div class="card text-bg-dark border-light">
					      <div class="card-body">
						        <h5 class="card-title">Ventas Por Mesas</h5>
						        <div style="height: 10%; width: 80%">
							  		<center>
							  			<canvas id="v_mesas"></canvas>
							  		</center>
								</div>
					      </div>
				    </div>
				  </div>
				  <div class="col-sm-6">
					    <div class="card text-bg-dark border-light">
						      <div class="card-body">
							        <h5 class="card-title">Ganacias Al Momento</h5>
							        <p class="card-text display-3">$<?php echo $total_comandas['total'];?></p>
						      </div>
					    </div>
				  </div>
			</div>
		</div>
			

	</body>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
		// GRÁFICA PLATILLOS
		let ctx = document.getElementById('myChart');

		new Chart(ctx, {
			type: 'bar',
			data: {
			  labels: [
		  				<?php
		  					foreach($labels as $valor){
		  						echo "'".$valor."'".","; 
		  					}
		  				?>
			  ],
			  datasets: [{
			  	label: 'Platillos',
			    data: [
			    		<?php
		  					foreach($stock_salida as $valor){
		  						echo $valor.","; 
		  					}
		  				?>

			    ],
			    backgroundColor: [
			      'rgba(255, 99, 132, 0.2)',
			      'rgba(255, 159, 64, 0.2)',
			      'rgba(255, 205, 86, 0.2)',
			      'rgba(75, 192, 192, 0.2)',
			      'rgba(54, 162, 235, 0.2)',
			      'rgba(153, 102, 255, 0.2)',
			      'rgba(201, 203, 207, 0.2)'
			    ],
			    borderColor: [
			      'rgb(255, 99, 132)',
			      'rgb(255, 159, 64)',
			      'rgb(255, 205, 86)',
			      'rgb(75, 192, 192)',
			      'rgb(54, 162, 235)',
			      'rgb(153, 102, 255)',
			      'rgb(201, 203, 207)'
			    ],
			    borderWidth: 1
			  }]
			},
			options: {
			  scales: {
			    y: {
			      beginAtZero: true
			    }
			  }
			}
		});

		// GRÁFICA VENTA MESAS
		let v_mesas_opt = document.getElementById('v_mesas');

		new Chart(v_mesas_opt, {
			type: 'doughnut',
			data: {
			  labels: [ 'Mesa 1', 'Mesa 2', 'Mesa 3' ],
			  datasets: [{
			  	label: 'Platillos',
			    data: [ 
			    		<?php
			    			echo $total['total_mesa1'].",".$total2['total_mesa2'].",".$total3['total_mesa3'].",";
			    		?>
			     ],
			    backgroundColor: [
			      'rgba(255, 99, 132, 0.2)',
			      'rgba(255, 159, 64, 0.2)',
			      'rgba(255, 205, 86, 0.2)',
			      'rgba(75, 192, 192, 0.2)',
			      'rgba(54, 162, 235, 0.2)',
			      'rgba(153, 102, 255, 0.2)',
			      'rgba(201, 203, 207, 0.2)'
			    ],
			    borderColor: [
			      'rgb(255, 99, 132)',
			      'rgb(255, 159, 64)',
			      'rgb(255, 205, 86)',
			      'rgb(75, 192, 192)',
			      'rgb(54, 162, 235)',
			      'rgb(153, 102, 255)',
			      'rgb(201, 203, 207)'
			    ],
			    borderWidth: 1
			  }]
			},
			options: {
			  scales: {
			    y: {
			      beginAtZero: true
			    }
			  }
			}
		});
	</script>

	</html>
<?php
		}
		elseif($_SESSION['rol'] != 'ADMINISTRADOR'){
			header("Location: ../index1.php");
		}
		else{

			header("Location: ../index.php");
			exit();
		  }
?>
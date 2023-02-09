<?php
	include '../conexion.php';
	include 'suma_cantidades.php';

	$sql = "SELECT * FROM inventario ORDER BY id DESC";
	$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../mesas/librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../mesas/librerias/js/bootstrap.min.js"></script>
    <style>
        hr {
            position: relative;
            top: 20px;
            border: none;
            height: 12px;
            background: black;
            margin-bottom: 50px;
        }
    </style>
</head>
<body style="background-image: url('../image/inventario.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
	<h1 class="d-block p-2 text-bg-danger text-center">RESTAURANTE A LA LEÑA</h1>
	<header class="p-2 text-bg-dark">
	    <div class="container">
	        <div class="d-flex justify-content-center py-3">
	            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
	              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
	            </a>
	            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
	                <a class="navbar-brand" href="../../inicio.php">
	                <img src="../image/lena.png" width="100" height="38">
	                </a>
	                <li><a href="../menu/index.php" class="btn btn-outline-light nav-link px-5">Menú</a></li>
	                <li><a href="../cocina/index.php" class="btn btn-outline-light nav-link px-5">Cocina</a></li>
	                <li><a href="../mesas/mesa1/mesa1.php" class="btn btn-outline-light nav-link px-5">Mesero</a></li>
	                <li><a href="index.php" class="btn btn-outline-light nav-link px-5">Inventario</a></li>
	                <li><a href="../logout.php" class="btn btn-secondary nav-link px-5">Cerrar Sesión</a></li>
	            </ul>
	        </div>
	    </div>
	</header>
	<br><br>
	<div class="container">
		<div style="background: #ffffff; color:black;" class="card mb-3">
			<h1 class="d-block p-2 text text-center">INVENTARIO</h1>
		</div>	
	
	<div class="container table-responsive">
		<table class="table table-sm table-dark">
			<thead class="thead-light">
				<tr>
					<th>FECHA DE <br>ENTRADA</th>
					<th>PRODUCTO</th>
					<th>STOCK<br>INCIAL</th>
					<th>STOCK<br>FINAL</th>
					<th>CANTIDAD<br> DISPONIBLE</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {	
				?>
					<tr>
						<th><?php echo $row['fecha_entrada']; ?></th>
						<th><?php echo $row['producto']; ?></th>
						<th><?php echo $row['stock_inicial']; ?></th>
						<th><?php echo $row['stock_salida']; ?></th>
						<th><?php echo $row['total_stock']; ?></th>
					</tr>
				<?php } ?>
			</tbody>
			<tr class="thead-light">
				<th>FECHA DE <br>ENTRADA</th>
				<th>PRODUCTO</th>
				<th>STOCK<br>INCIAL</th>
				<th>STOCK<br>FINAL</th>
				<th>CANTIDAD<br> DISPONIBLE</th>
			</tr>
		</table>
	</div>
</body>
</html>
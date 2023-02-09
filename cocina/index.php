<?php
	include '../conexion.php';

	//MESA 1
	$sql = "SELECT id, categoria, opt, fecha_entrada, cantidad, status, mesa  FROM mesa1 
		WHERE status = 'PREPARANDO' ORDER BY id DESC";
	$resultado = $mysqli->query($sql);

	//MESA 2
	$sql10 = "SELECT id, categoria, opt, fecha_entrada, cantidad, status, mesa  FROM mesa2 
		WHERE status = 'PREPARANDO' ORDER BY id DESC";
	$resultado10 = $mysqli->query($sql10);

	//MESA 3
	$sql3 = "SELECT id, categoria, opt, fecha_entrada, cantidad, status, mesa  FROM mesa3 
		WHERE status = 'PREPARANDO' ORDER BY id DESC";
	$resultado3 = $mysqli->query($sql3);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>LEÑAS</title>
	<link href="../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../mesas/librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../mesas/librerias/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url('fondo.jpeg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
	<h1 class="d-block p-2 text-bg-danger text-center">RESTAURANTE A LA LEÑA</h1>
	<header class="p-2 text-bg-dark">
	    <div class="container">
	        <div class="d-flex justify-content-center py-3">
	            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
	              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
	            </a>
	            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
	                <a class="navbar-brand px-3" href="../inicio.php">
	                <img src="../image/lena.png" width="100" height="38">
	                </a>
	                <li><a href="../menu/index.php" class="btn btn-outline-light nav-link px-5">Menu</a></li>
	                <li><a href="index.php" class="btn btn-outline-light nav-link px-5">Cocina</a></li>
	                <li><a href="../mesas/mesa1/mesa1.php" class="btn btn-outline-light nav-link px-5">Mesero</a></li>
	                <li><a href="../inventario/index.php" class="btn btn-outline-light nav-link px-5">Inventario</a></li>
	                <li><a href="../logout.php" class="btn btn-secondary nav-link px-5">Cerrar Sesión</a></li>
	            </ul>
	        </div>
	    </div>
	</header>
	<br>
	<div class="container">
		<div style="background: #67af47; color:black;" class="card mb-3">
			<h1 class="d-block p-2 text text-center">PEDIDOS COCINERO</h1>
		</div>	
	</div>
	<div class="container table-responsive">
		<table class="table table-bordered border border-danger table-sm">
			<thead class="table-dark">
				<tr>
					<th>CATEGORIA</th>
					<th>PRODUCTO</th>
					<th>CANTIDAD</th>
					<th>FECHA & HORA PEDIDO</th>
					<th>STATUS</th>
					<th>MESA</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {	
				?>
					<tr class="table-light">
						<th><?php echo $row['categoria']; ?></th>
						<th><?php echo $row['opt']; ?></th>
						<th><?php echo $row['cantidad']; ?></th>
						<th><?php echo date("Y/m/d H:s:i", strtotime($row['fecha_entrada'])); ?></th>
						<th class="badge text-bg-warning"><?php echo $row['status']; ?></th>
						<th><?php echo $row['mesa']; ?></th>
						<th>
							<a href="cambiar_status.php?id=<?php echo $row['id']?>&mesa=<?php echo $row['mesa']; ?>" class="btn btn-warning btn-sm">FINALIZAR</a>
						</th>
					</tr>
				<?php } ?>
			</tbody>
			<tbody>
				<?php
					while ($fila=$resultado10->fetch_array(MYSQLI_ASSOC)) {	
				?>
					<tr class="table-light">
						<th><?php echo $fila['categoria']; ?></th>
						<th><?php echo $fila['opt']; ?></th>
						<th><?php echo $fila['cantidad']; ?></th>
						<th><?php echo date("Y/m/d H:s:i", strtotime($fila['fecha_entrada'])); ?></th>
						<th class="badge text-bg-warning"><?php echo $fila['status']; ?></th>
						<th><?php echo $fila['mesa']; ?></th>
						<th>
							<a href="cambiar_status.php?id=<?php echo $fila['id']?>&mesa=<?php echo $fila['mesa']; ?>" class="btn btn-warning btn-sm">FINALIZAR</a>
						</th>
					</tr>
				<?php } ?>
			</tbody>
			<tbody>
				<?php
					while ($campos=$resultado3->fetch_array(MYSQLI_ASSOC)) {	
				?>
					<tr class="table-light">
						<th><?php echo $campos['categoria']; ?></th>
						<th><?php echo $campos['opt']; ?></th>
						<th><?php echo $campos['cantidad']; ?></th>
						<th><?php echo date("Y/m/d H:s:i", strtotime($campos['fecha_entrada'])); ?></th>
						<th class="badge text-bg-warning"><?php echo $campos['status']; ?></th>
						<th><?php echo $campos['mesa']; ?></th>
						<th>
							<a href="cambiar_status.php?id=<?php echo $campos['id']?>&mesa=<?php echo $campos['mesa']; ?>" class="btn btn-warning btn-sm">FINALIZAR</a>
						</th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>
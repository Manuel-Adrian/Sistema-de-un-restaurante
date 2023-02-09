<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../mesas/librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../mesas/librerias/js/bootstrap.min.js"></script>
</head>
<body style="background: #B87609;">
	<h1 class="d-block p-2 text-bg-danger text-center">RESTAURANTE A LA LEÑA</h1>
	<header class="p-2 bg-dark">
	    <div class="container">
	        <div class="d-flex justify-content-center py-3">
	            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
	              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
	            </a>
	            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
	                <a class="navbar-brand px-3" href="../inicio.php">
	                <img src="../image/lena.png" width="100" height="38">
	                </a>
	                <li><a href="index.php" class="btn btn-outline-light nav-link px-5">Menú</a></li>
	                <li><a href="../cocina/index.php" class="btn btn-outline-light nav-link px-5">Cocina</a></li>
	                <li><a href="#" class="btn btn-outline-light nav-link px-5">Mesero</a></li>
	                <li><a href="../inventario/index.php" class="btn btn-outline-light nav-link px-5">Inventario</a></li>
	                <li><a href="../logout.php" class="btn btn-outline-secondary nav-link px-5">Cerrar Sesión</a></li>
	            </ul>
	        </div>
	    </div>
	</header>
	<br><br>
	<div class="container">
		<center>
			<h2 class="d-block" style="background: #F1AB36; color:black;" class="card mb-3">MENU</h2>
			<hr>
			 <!-- CATEGORIA COMIDA RAPIDA-->
			<h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">COMIDA RAPIDA</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/pasta.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">SOPA DE PASTA</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/arroz.jpeg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ARROZ</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/tacos.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">TACOS</h2>
				</div>
		    </div>
		    <br><br>
		    <!-- CATEGORIA CARNES-->
		    <h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">CARNES</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/enchilada.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ENCHILADA</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/arrachera.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ARRACHERA</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/chuleta.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">CHULETA</h2>
				</div>
			</div>
			<br><br>
				<!-- CATEGORIA POLLOS-->
		    <h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">POLLOS</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/adobado.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ADOBO</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/enchilado.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ENCHILADO</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/lena.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">A LA LEÑA</h2>
				</div>
			</div>
			<br><br>
				<!-- CATEGORIA PESCADOS-->
		    <h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">PESCADOS</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/empanizado.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">EMPANIZADO</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/salmon.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">SALMON</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/camaron.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">CAMARON</h2>
				</div>
			</div>
			<br><br>
				<!-- CATEGORIA POSTRES-->
		    <h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">POSTRES</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/flan.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">FLAN</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/gela.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">GELATINA</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/leche.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">ARROZ CON LECHE</h2>
				</div>
			</div>
			<br><br>
				<!-- CATEGORIA BEBEDIAS-->
		    <h3 class="d-block" style="background: #B89F76; color:black;" class="card mb-3">BEBIDAS</h3>
		    <hr>
			<div class="row">
				<div class="col-lg-4">
					<img src="img/refre.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">REFRESCOS</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/aguas.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">AGUAS</h2>
				</div>
				<div class="col-lg-4">
					<img src="img/cerveza.jpg" width="140" height="140" class="bd-placeholder-img rounded-circle">

					<h2 class="fw-normal">CERVEZA</h2>
				</div>
			</div>
		</center>

	</div>


</body>
</html>
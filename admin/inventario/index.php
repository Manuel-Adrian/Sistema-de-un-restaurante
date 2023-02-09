<?php
	include '../../conexion.php';
	include 'suma_cantidades.php';

	$sql = "SELECT * FROM inventario ORDER BY id DESC";
	$resultado = $mysqli->query($sql);
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
		<title>Inventario</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<link href="../../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	    <script src="../../mesas/librerias/js/jquery-3.1.1.min.js"></script>
	    <script src="../../mesas/librerias/js/bootstrap.min.js"></script>
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
	<script type="text/javascript">
		var opt_1 = new Array ("SOPA DE PASTA", "ARROZ", "TACOS");
		var opt_2 = new Array ("ENCHILADA", "ARRACHERA", "CHULETA");
		var opt_3 = new Array ("ADOBO", "ENCHILADO", "A LA LEÑA");
		var opt_4 = new Array ("EMPANIZADO", "SALMON", "CAMARON");
		var opt_5 = new Array ("FLAN", "GELATINA", "ARROZ CON LECHE");
		var opt_6 = new Array ("REFRESCOS", "AGUAS", "CERVEZA");

		function cambia(){
			var categoria;
			categoria = document.formulario1.categoria[document.formulario1.categoria.selectedIndex].value;

			if (categoria!=0){
				mis_opts = eval("opt_"+categoria);
				num_opts = mis_opts.length;
				document.formulario1.producto.length = num_opts;

				for (i = 0; i<num_opts; i++) {
					document.formulario1.producto.options[i].value = mis_opts[i];
					document.formulario1.producto.options[i].text = mis_opts[i];
				}
			} else{
				document.formulario1.producto.length = 1;
				document.formulario1.producto.options[0].value = "-";
				document.formulario1.producto.options[0].text = "-";
			}
			document.formulario1.producto.options[0].selected=true;
		}

	</script>
	<body style="background-image: url('../../image/inventario.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
		<nav class="navbar navbar-expand-lg bg-secondary">
			<div class="container-fluid">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>Menú
			    </button>
			    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			     	<a class="navbar-brand" href="../ganancias/">Ganacias</a>
				    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="navbar-brand">
				          <a class="nav-link active" aria-current="page" href="../ventas/">Ventas</a>
				        </li>
				        <li class="navbar-brand">
				          <a class="nav-link active" href="index.php">Inventario</a>
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
		<br><br>
		<div class="container">
			<div style="background: #ffffff; color:black;" class="card mb-3">
				<h1 class="d-block p-2 text text-center">INVENTARIO</h1>
			</div>	
		
			<center><a style="margin-left: 3%; width: 140px; height: 50px; font-size:20px;" data-toggle="modal" data-target="#addproducto" class="btn btn-light btn-sm" aria-disabled="true" > <b>AGREGAR</b> </a></center> <hr>

			<div style="width:100%;" class="modal fade" id="addproducto" tabindex="-1" role="dialog" data-show="true" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<center>
								<center>
									<h4 class="modal-title" id="myModalLabel">AGREGAR PRODUCTO</h4>
								</center>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">X</span>
								</button>
								<div class="modal-body">
									<div class="container-fluid">
										<form method="POST" name="formulario1" action="guardar_inventario.php">
											<!-------INICIO DE FORMULARIO------>
											<!-------CATEGORIA------>
											<div class="row form-group">
												<div class="col-sm-4">
													<label class="control label">CATEGORIA</label>	
												</div>

												<div class="col-sm-6">
													<select class="form-control" name="categoria" id="categoria" onchange='cambia()' required>
														<option value="0">SELECCIONE</option>
														<option value="1">COMIDA RAPIDA</option>
														<option value="2">CARNES</option>
														<option value="3">POLLOS</option>
														<option value="4">PESCADOS</option>
														<option value="5">POSTRES</option>
														<option value="6">BEBIDAS</option>
													</select>
												</div>
											</div>				
											<!-------PRODUCTO------>
											<div class="row form-group">
												<div class="col-sm-4">
													<label class="control label">PRODUCTO</label>	
												</div>

												<div class="col-sm-6">
													<select class="form-control" name="producto" id="producto" required>
														<option value="-"></option>

													</select>
												</div>
											</div>

											<!-------STOCK INICIAL------>
											<div class="row form-group">
												<div class="col-sm-4">
													<label class="control label">STOCK <br>INICIAL</label>	
												</div>

												<div class="col-sm-6">
													<input type="number" class="form-control" name="stock_inicial" id="stock_inicial" 
													required>
												</div>	
											</div>

											<div class="modal-footer">
												<button style="margin-right: 40px; width:80%; height:60px;" class="btn btn-outline-dark" type="submit">ENVIAR</button>
											</div>	
										</form>
									</div>
								</div>
							</center>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<?php if (isset($_GET['error'])) { ?>
	 		<center><p class="badge text-bg-danger"><?php echo $_GET['error']; ?></p></center>
	 	<?php } ?>

	 	<?php if (isset($_GET['exito'])) { ?>
	 		<center><p class="badge text-bg-success"><?php echo $_GET['exito']; ?></p></center>
	 	<?php } ?>

	 	<?php if (isset($_GET['duplicado'])) { ?>
	 		<center><p class="badge text-bg-warning"><?php echo $_GET['duplicado']; ?></p></center>
	 	<?php } ?>
		<div class="container table-responsive">
			<table class="table table-sm table-dark">
				<thead class="thead-light">
					<tr>
						<th>FECHA DE <br>ENTRADA</th>
						<th>PRODUCTO</th>
						<th>STOCK<br>INCIAL</th>
						<th>STOCK<br>SALIDA</th>
						<th>CANTIDAD<br> DISPONIBLE</th>
						<th>ACCIONES</th>
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
							<th>
								<a href="eliminar_producto_inventario.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">ELIMINAR</a>
								<a style="margin-left: 3%; width: 50px; height: 30px;" data-toggle="modal" data-target="#agregarproducto" class="btn btn-light btn-sm" aria-disabled="true"> 
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
										  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
										  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
									</svg>
								</a>
								<div style="width:100%;" class="modal fade" id="agregarproducto" tabindex="-1" role="dialog" data-show="true" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content" style="background:blue; color: white;">
											<div class="modal-header">
												<center>
													<center>
														<h4 class="modal-title" id="myModalLabel">AGREGAR CANTIDAD</h4>
													</center>
													<button class="close" type="button" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">X</span>
													</button>
													<div class="modal-body">
														<div class="container-fluid">
															<form method="POST" action="agregar_cantidad_producto.php">
																<!-------INICIO DE FORMULARIO------>

																<!-------STOCK INICIAL------>
																<div class="row form-group">
																	<div class="col-sm-4">
																		<label class="control label">CANTIDAD DE PRODUCTOS A AGREGAR</label>	
																	</div>

																	<div class="col-sm-6">
																		<input type="number" class="form-control" name="cantidad_agregar" id="cantidad_agregar" 
																		required>
																	</div>	
																</div>
																<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

																<div class="modal-footer">
																	<button style="margin-right: 40px; width:80%; height:60px;" class="btn btn-dark" type="submit">ENVIAR</button>
																</div>	
															</form>
														</div>
													</div>
												</center>
											</div>	
										</div>
									</div>
								</div>
								<hr>
							</th>
						</tr>
					<?php } ?>
				</tbody>
				<tr class="thead-light">
					<th>FECHA DE <br>ENTRADA</th>
					<th>PRODUCTO</th>
					<th>STOCK<br>INCIAL</th>
					<th>STOCK<br>FINAL</th>
					<th>CANTIDAD<br> DISPONIBLE</th>
					<th>ACCIONES</th>
				</tr>
			</table>
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
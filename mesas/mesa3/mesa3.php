<?php
	include 'conexion.php';
	$sql = "SELECT * FROM mesa3 WHERE status = 'EN ESPERA' ORDER BY id DESC";
	$resultado = $mysqli->query($sql);

	$query = "SELECT COUNT(status) AS contador FROM mesa3 WHERE status = 'PREPARANDO'";
	$contador_status = $mysqli->query($query);

	$consulta = "SELECT COUNT(status) AS contador FROM mesa3 WHERE status = 'PREPARANDO'";
	$contador = $mysqli->query($consulta);

	$query1 = "SELECT SUM(subtotal) as totall FROM mesa3 WHERE status = 'EN ESPERA'";
	$totall = $mysqli->query($query1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>LEÑAS</title>
	<link href="../librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
	function calcular(){
		try{
			var a = parseFloat(document.getElementById("efectivo").value || 0);
			var b = parseFloat(document.getElementById("monto_pagar").value || 0);
			document.getElementById("cambio").value = a-b;
		}catch(e){

		}	
	}
</script>

<!-------CREAR JAVASCRIPT PARA PRODUCTOS---------->

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
			document.formulario1.opt.length = num_opts;

			for (i = 0; i<num_opts; i++) {
				document.formulario1.opt.options[i].value = mis_opts[i];
				document.formulario1.opt.options[i].text = mis_opts[i];
			}
		} else{
			document.formulario1.opt.length = 1;
			document.formulario1.opt.options[0].value = "-";
			document.formulario1.opt.options[0].text = "-";
		}
		document.formulario1.opt.options[0].selected=true;
	}

</script>

<body style="background-image: url('../img/fondo2.png'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
	<?php
		include 'header.php';
	?>
	<br>
	<a style="margin-left: 3%; width: 140px; height: 50px; font-size:20px;" data-toggle="modal" data-target="#addproducto" class="btn btn-danger btn-lg" aria-disabled="true" > <b>AGREGAR</b> </a> <hr>		
	</a>

	<div>
		<form method="POST" action="guardar_comandas.php" style="background:#474545">
			<?php
				while ($row=$totall->fetch_array(MYSQLI_ASSOC)) {	
			?>

				<div style="background: #67af47; color:black;" class="card mb-3">
					
					<h4 class="text-center">Cobro</h4>
				</div> <br>

				<label class="control label" style="font-size: 20px; color: white;"><b>TOTAL</b></label>
				<input type="text" name="monto_pagar" id="monto_pagar" class="btn btn-success"
				value='<?php echo $row['totall']; ?>' required readonly oninput="calcular()" step="0.0001">

			<?php } ?>
				<label class="control label" style="font-size: 20px; color: white;"><b>EFECTIVO</b></label>
				<input type="number" min="1" name="efectivo" id="efectivo" class="" required oninput="calcular()" step="0.0001">

				<label class="control label" style="font-size: 20px; color: white;"><b>CAMBIO</b></label>
				<input type="number" min="0" name="cambio" id="cambio" class="" required>
				<br><br>

				<button style="width:100%; height:50px; font-size:20px;" type="submit" class="btn btn-warning" <?php while ($row11=$contador->fetch_array(MYSQLI_ASSOC)) { 	if($row11['contador'] >= 1){ echo "disabled"; }} ?> > FINALIZAR</button>
			
		</form>
	</div>
	<br><br>
	<div class="container table-responsive">
		<div style="background: #F7EDEB color:black;" class="card mb-3">		
			<h4 class="text-center">MESA 3</h4>
		</div> <br>
		<table class="table table-bordered border border-danger table-sm">
			<thead class="table-dark">
				<tr>
					<th>CATEGORIA</th>
					<th>PRODUCTO</th>
					<th>PRECIO</th>
					<th>CANTIDAD</th>
					<th>FECHA & HORA PEDIDO</th>
					<th>STATUS</th>
					<th>MESA</th>
					<th>SUBTOTAL</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table-light">
					<th colspan="9">
						<center>
							<?php
								while ($row1=$contador_status->fetch_array(MYSQLI_ASSOC)) {	
									if($row1['contador'] >= 1){
										echo "HAY ". $row1['contador']." PLATILLOS EN PREPARACIÓN";
									}
							}?>
							
						</center>
					</th>
				</tr>
				<?php
					while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {	
				?>
					<tr class="table-light">
						<th><?php echo $row['categoria']; ?></th>
						<th><?php echo $row['opt']; ?></th>
						<th>$<?php echo $row['precio']; ?></th>
						<th><?php echo $row['cantidad']; ?></th>
						<th><?php echo date("Y/m/d H:s:i", strtotime($row['fecha_entrada'])); ?></th>
						<th class="badge text-bg-<?php if($row['status'] == "PREPARANDO"){echo "warning";}else{echo "success";}?>"><?php echo $row['status']; ?></th>
						<th><?php echo $row['mesa']; ?></th>
						<th>$<?php echo $row['subtotal']; ?></th>
						<th>
							<a href="eliminar_mesa.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">ELIMINAR</a>
						</th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php 
		date_default_timezone_set("America/Mexico_City");
		$fecha_entrada = date("Y-m-d H:i:s");
	?>
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
								<form method="POST" name="formulario1" action="guardar_mesa3.php">

									<!-------INICIO DE FORMULARIO------>
									<div class="row form-group">
										<div class="col-sm-4">
											<label class="control label">FECHA/HORA </label>	
										</div>

										<div class="col-sm-7">
											<input type="text" class="form-control" name="fecha_entrada" id="fecha_entrada" 
											value="<?php echo $fecha_entrada ?>" readonly>
										</div>	
									</div>
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
											<select class="form-control" name="opt" id="opt" required>
												<option value="-"></option>

											</select>
										</div>
									</div>
									<!-------CANTIDAD------>
									<div class="row form-group">
										<div class="col-sm-4">
											<label class="control label">CANTIDAD</label>	
										</div>

										<div class="col-sm-6">
											<input type="number" class="form-control" name="cantidad" id="cantidad" 
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

</body>
</html>
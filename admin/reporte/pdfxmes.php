<?php
	session_start();
		if($_SESSION['rol'] === 'ADMINISTRADOR'){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TICKET</title>
		<link href="../../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	    <script src="../../mesas/librerias/js/jquery-3.1.1.min.js"></script>
	    <script src="../../mesas/librerias/js/bootstrap.min.js"></script>
	</head>
	<body style="background: gray; padding-top: 80px;">
		<div class="container">
			<form method="POST" action="reporte.php" class="border">
				<center><h1>REPORTE POR MES</h1><br>
				<label class="control label px-4"><b>FECHA DE INICIO</b></label>
				<input type="date" name="fecha1" id="" required>

				<label class="control label px-4"><b>FECHA FINAL</b></label>
				<input type="date" name="fecha2" id="" value="" required>
				<br><br><br>

				<button type="submit" name="submit" class="btn btn-danger">Generar Reporte</button><br><br>
				<input type="reset" name="reset" value="Limpiar" class="btn btn-warning">
				<a href="../" class="btn btn-success">Regresar</a>
				</center>
			</form>
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
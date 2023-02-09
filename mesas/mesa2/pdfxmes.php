<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TICKET</title>
	<link href="../librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
</head>
<body>
	<form method="reporte.php" action="POST" >
		<center><h1>REPORTE POR MES</h1></center><br>
		<label class="control label px-4"><b>FECHA DE INICIO</b></label>
		<input type="date" name="fecha1" id="" required>

		<label class="control label px-4"><b>FECHA FINAL</b></label>
		<input type="date" name="fecha2" id="" value=''required>
		<br><br><br>

		<center>
			<input type="submit" name="submit" value="Finalizar" class="btn btn-danger">
			<input type="reset" name="reset" value="Limpiar" class="btn btn-warning">
		</center>

	</form>

</body>
</html>
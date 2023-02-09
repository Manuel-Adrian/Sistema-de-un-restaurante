<?php
	session_start();
		if($_SESSION['rol'] != 'ADMINISTRADOR')
		{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Inicio</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
			<title>LEÑAS</title>
			<link href="../librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		    <link href="../librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
		    <script src="../librerias/js/jquery-3.1.1.min.js"></script>
		    <script src="../librerias/js/bootstrap.min.js"></script>
		</head>
		<body style="background-image: url('image/1.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">

			<h1 class="d-block p-2 text-bg-secondary text-center">RESTAURANTE A LA LEÑA</h1>
			<div class="container">
				<center>
					<br><br>
					<h1 class="display-5 btn btn-light" style="width:80%; height: 70%; font-size: 30px;"> BIENVENID@ <?php echo $_SESSION['rol']." ";  echo $_SESSION['nombre']; ?></h1>
					<br><br>
					<?php
						if($_SESSION['rol'] === 'COCINERO'){
					?>
						<a href="cocina/" class="btn btn-success" style="width:50%; height: 70%;">COCINERO</a>
					<?php 
						}elseif($_SESSION['rol'] === 'MESERO'){ 
					?>
						<a href="mesas/mesa1/mesa1.php" class="btn btn-info" style="width:50%; height: 70%;">MESERO</a>
					<?php	
						}
					?>
					<br><br>
					<a href="logout.php" class="btn btn-danger">Salir</a>
				</center><br><br>
			</div>

		</body>
		</html>
<?php
		}
		elseif($_SESSION['rol'] === 'ADMINISTRADOR'){
			header("Location: admin/index.php");
		}
		else{

			header("Location: index.php");
			exit();
		  }
?>
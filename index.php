<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../mesas/librerias/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../mesas/librerias/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="../mesas/librerias/js/jquery-3.1.1.min.js"></script>
    <script src="../mesas/librerias/js/bootstrap.min.js"></script>
</head>
<style>
	body {
	  display: flex;
	  align-items: center;
	  padding-top: 150px;
	  padding-bottom: 40px;
	  background-color: #f5f5f5;
	}

	.form-signin {
	  max-width: 330px;
	  padding: 15px;
	}

	.form-signin .form-floating:focus-within {
	  z-index: 2;
	}

	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}

	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

</style>
<body class="text-center" style="background-image: url('image/12.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
	<main class="form-signin w-100 m-auto">
		<form method="POST" action="login.php">
			<div class="card" style="width: 18rem; background:#312d2d; color: white;">
			 	<div class="card-body">
			 		<?php if (isset($_GET['error'])) { ?>
				 		<center><div class="alert alert-info d-none d-lg-block"><?php echo $_GET['error']; ?></div></center>
				 	<?php } ?>
			 		<!--<div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div>-->
				    <h1 class="h3 mb-3 fw-normal">INICIO DE SESIÓN</h1>

				    <div class="form-floating">
				      <input type="email" class="form-control text-center-black" id="floatingInput" placeholder="name@example.com" name="correo">
				      <label for="floatingInput" style="color:black;">Correo Electronico</label>
				    </div><br>
				    <div class="form-floating">
				      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena">
				      <label for="floatingPassword" style="color:black;">Contraseña</label>
				    </div>
				    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
			 	</div>
			</div>
		 </form>
	</main>
</body>
</html>
<?php 
	session_start(); 
	include "conexion.php";
	

	if (isset($_POST['correo']) && isset($_POST['contrasena'])) {

		function validate($data){
	       $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

		$correo = validate($_POST['correo']);
		$contrasena = validate($_POST['contrasena']);

		if (empty($correo)) {
			header("Location: index.php?error=Introducir correo electronico");
		    exit();
		}else if(empty($contrasena)){
	        header("Location: index.php?error=Introducir contraseña de acceso");
		    exit();
		}else{
			$sql = "SELECT * FROM users WHERE correo='$correo' AND contrasena='$contrasena'";

			$result = $mysqli->query($sql);

			if (mysqli_num_rows($result) === 1) {

				$row = mysqli_fetch_assoc($result);

	            if ($row['correo'] === $correo && $row['contrasena'] === $contrasena) {

	            	$_SESSION['id'] = $row['id'];
	            	$_SESSION['nombre'] = $row['nombre'];
	            	$_SESSION['apellidos'] = $row['apellidos'];
	            	$_SESSION['correo'] = $row['correo'];
	            	$_SESSION['contrasena'] = $row['contrasena'];
	            	$_SESSION['rol'] = $row['rol'];
	            	
	            	if($_SESSION['rol'] === "ADMINISTRADOR"){
	            		header("Location: admin/index.php");
	            		exit();
	            	}elseif($_SESSION['rol'] === "COCINERO"){
	            		header("Location: index1.php");
	            		exit();
	            	}elseif($_SESSION['rol'] === "MESERO"){
	            		header("Location: index1.php");
	            		exit();
	            	}
	            }else{
					header("Location: index.php?error=Correo o Contraseña incorrecto!");
			        exit();
				}
			}else{
				header("Location: index.php?error=Correo o Contraseña incorrecto!");
		        exit();
			}
		}
		
	}else{
		header("Location: index.php");
		exit();
	}

?>


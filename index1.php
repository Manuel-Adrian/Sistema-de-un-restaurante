<?php
	session_start();
	
		if($_SESSION['rol'] != 'ADMINISTRADOR'){
		
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<frameset cols=15%,*>
			
		<frame name="izquierdo" scrolling-y="auto" src="mesas/mesas.php">
				
		</frame>

		<frame name="derecho" scrolling="yes" src="inicio.php">
				
		</frame>
			
	</frameset>

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
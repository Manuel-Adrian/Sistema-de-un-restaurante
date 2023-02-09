<?php

	include 'plantilla_pdf.php';
	require '../conexion.php';

	$fecha_inicio = $_POST['fecha1'];
	$fecha_final= $_POST['fecha2'];

	$query ="SELECT id, fecha_entrada, monto_pagar FROM comandas WHERE fecha_entrada BETWEEN '$fecha_inicio' AND '$fecha_final'";
	$resultado= $mysqli->query($query);

	$consulta_suma ="SELECT SUM(monto_pagar) AS total FROM comandas WHERE fecha_entrada BETWEEN '$fecha_inicio' AND '$fecha_final'";
	$resultado_consulta= $mysqli->query($consulta_suma);

	$valor_total = mysqli_fetch_assoc($resultado_consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('landscape','A3');
	$pdf->SetFont('Arial','',20);
	$pdf->Cell(15,10,'Fecha de hoy :'.date('d/m/Y'));
	$pdf->Cell(100);
	$pdf->Cell(15,10,'Fecha de corte del: '.$fecha_inicio.' a '.$fecha_final);
	$pdf->Ln(20);

	$pdf->SetFillColor(255,255,255);
	$pdf->Cell(100);
	$pdf->SetFont('Arial','B',20);
		$pdf->Cell(20,10,'Id',1,0,'C',1);
		$pdf->Cell(60,10,'Fecha',1,0,'C',1);
		$pdf->Cell(30,10,'Ventas',1,0,'C',1);
		$pdf->Ln(10);

	while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
		$pdf->Cell(100);
		$pdf->SetFont('Arial','I',15);
			$pdf->Cell(20,10,$row['id'],1,0,'C',1);
			$pdf->Cell(60,10,$row['fecha_entrada'],1,0,'C',1);
			$pdf->Cell(30,10,$row['monto_pagar'],1,0,'C',1);
			$pdf->Ln(10);

	}
	$pdf->Ln(20);
	$pdf->Cell(120);
	$pdf->SetFont('Arial','I',30);
	$pdf->Cell(50,10,'Ganancias del mes: '.$valor_total['total']);

	$pdf->Output();

?>
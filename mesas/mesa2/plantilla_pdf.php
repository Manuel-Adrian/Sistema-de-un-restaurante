<?php
	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		
		function Header()
		{
			$this->Image('img/header.jpeg', 9);
			$this->Ln(5);
		}

		function Footer(){
			$this->SetY(-15);
			$this->SetFont('Arial', 'I', 0);
			$this->Cell(0,10, 'Pagina', .$this->PageNo().'/{nb}',0,0,'C');
		}
	}
?>
<?php
	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		
		function Header()
		{
			//Logo
        $this->Image("../../image/images.jpeg" , 9);
         $this->Ln(20);
        //Arial bold 15
        $this->SetFont('Arial','B',15);
        //Movernos a la derecha
        $this->Cell(80);
        //Título
        $this->Cell(60,10,'Ventas Ultimo mes',1,0,'C');
        //Salto de línea
        $this->Ln(20);
			/*$this->Image('../../image/header.jpeg', 9);
			$this->Ln(5);*/
		}

		function Footer(){
			$this->SetY(-15);
			$this->SetFont('Arial', 'I', 0);
			$this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
?>
<?php

	/*require 'fpdf/fpdf.php';

	class PDF extends FPDF{

		function Header(){

			$this->Image('../../image/header.jpeg',100.10);
			$this->Ln(5);
		}


		function Footer(){

			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');
		}
	}*/

?>
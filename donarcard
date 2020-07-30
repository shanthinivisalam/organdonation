<?Php
require('fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->Image('img/organlogo.jpg',120,20,70);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,10,'Name:','','','L',false);
$pdf->Cell(90,10,$_POST['name'],'','','L',false);
$pdf->Ln(20);
$pdf->Cell(60,10,'Phone number:','','','L',false);
$pdf->Cell(90,10,$_POST['phno'],'','','L',false);
$pdf->Ln(20);
$pdf->Cell(60,10,'Blood Group:','','','L',false);
$pdf->Cell(90,10,$_POST['bloodgrp'],'','','L',false);
$pdf->Ln(20);
$pdf->Cell(60,10,'Emergency contact:','','','L',false);
$pdf->Cell(90,10,$_POST['emernos'],'','','L',false);
$pdf->Ln(20);
$pdf->Cell(60,10,'Organs:','','','L',false);
$pdf->Cell(90,10,$_POST['organs'],'','','L',false);
$pdf->Ln(20);
$pdf->Image('img/donarcard.jpg',20,110,150);
$pdf->Output();
?>
<?php
require('../libreria/F-121-10_table.php');

$pdf = new PDF_MC_Table('L');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88, 15.88));

$pdf->bottom();

$pdf->Output();
?>
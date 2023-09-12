<?php
require('libreria/F-121-05_table.php');

$pdf = new PDF_MC_Table('L');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(34, 34, 34, 34, 34, 34, 34, 34));


$pdf->bottom();

$pdf->Output();
?>
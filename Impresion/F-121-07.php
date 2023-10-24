<?php
require('../libreria/F-121-07_table.php');

$pdf = new PDF_MC_Table('P');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(34, 34, 34, 34, 34, 34, 34, 34));

$pdf->contenido();

$pdf->Output();
?>
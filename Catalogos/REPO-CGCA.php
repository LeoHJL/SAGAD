<?php
require('../libreria/CGCA_table.php');

$conexion=mysqli_connect('localhost','root','','sagad');
$sql="SELECT C.Seccion, C.Nombre_Seccion, C.Serie, C.Nombre_Serie, C.SubSerie, C.Nombre_Subserie, C.SubSubSerie, C.Nombre_SubSubSerie, C.Descripcion FROM Codigo C";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF_MC_Table('L');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(8, 8, 8, 12, 34, 34, 34, 34, 105));

while ($row = $resultado->fetch_assoc()) {
    $pdf->Row(array($row['Seccion'], $row['Serie'], $row['SubSerie'], $row['SubSubSerie'], utf8_decode($row['Nombre_Seccion']), utf8_decode($row['Nombre_Serie']), utf8_decode($row['Nombre_Subserie']), utf8_decode($row['Nombre_SubSubSerie']), $row['Descripcion']));
}

$pdf->AddPage();
$pdf->extra();

$pdf->Output();
?>
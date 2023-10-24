<?php
require('../libreria/CADIDO_table.php');

$conexion=mysqli_connect('localhost','root','','sagad');
$sql="SELECT C.Seccion, C.Nombre_Seccion, C.Serie, C.Nombre_Serie, C.SubSerie, C.Nombre_Subserie, C.SubSubSerie, C.Nombre_SubSubSerie, V.Administrativo, V.JuridicoLegal, V.FiscalContable, 
CO.Archivo_Tramite, CO.Archivo_Concentracion, CO.Total, D.Baja_Documental, D.Muestreo, D.Historico, D.Digitalizacion, A.Publico, A.Reservado, A.Confidencial FROM Codigo C JOIN Valor 
V ON C.ID_Valores = V.ID_Valores JOIN Conservacion CO ON C.ID_Conservacion = CO.ID_Conservacion JOIN Disposicion D ON C.ID_Disposicion = D.ID_Disposicion JOIN Acceso A ON C.ID_Acceso = A.ID_Acceso";
$resultado = mysqli_query($conexion, $sql);

$pdf = new PDF_MC_Table('L');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(8, 8, 8, 12, 34, 34, 34, 34, 8, 8, 8, 8, 8, 10, 8, 8, 8, 8, 8, 8, 8));

while ($row = $resultado->fetch_assoc()) {
    $pdf->Row(array($row['Seccion'], $row['Serie'], $row['SubSerie'], $row['SubSubSerie'], utf8_decode($row['Nombre_Seccion']), utf8_decode($row['Nombre_Serie']), utf8_decode($row['Nombre_Subserie']), utf8_decode($row['Nombre_SubSubSerie']), $row['Administrativo'], $row['JuridicoLegal'], $row['FiscalContable'], $row['Archivo_Tramite'], $row['Archivo_Concentracion'], $row['Total'], $row['Baja_Documental'], $row['Muestreo'], $row['Historico'], $row['Digitalizacion'], $row['Publico'], $row['Reservado'], $row['Confidencial']));
}

$pdf->AddPage();
$pdf->extra();

$pdf->Output();
?>
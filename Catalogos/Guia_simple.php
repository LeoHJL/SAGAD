<?php
require('../libreria/fpdf.php');

class PDF extends FPDF
{

    function Header()
    {
        $this->image('../img/uaq.jpg', 10, 5, 20);
        $this->image('../img/coordinacion.png', 260, 6, 35);

        // Arial bold 12
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);

        // Movernos a la derecha
        $this->Cell(90);

        // Título
        $this->Cell(110, 10, 'Guia Simple de Archivos - UAQ', 0, 1, 'C', 1);
        // Salto de línea

        $this->Ln(16);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);
    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 7);
        $this->Cell(0, 4, utf8_decode('Página ') . $this->PageNo(), 0, 0, 'C');
        $this->Cell(0, 4, utf8_decode('GSA-UAQ'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('Versión 2.0'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('30/06/2023'), 0, 1, 'R');
    }

    function cai()
    {
        $this->SetX(10);
        $this->SetFont('Arial', '', 8);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('COORDINADORA'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('M. en DGE. Verónica Margarita Cruz Torres'),1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'veronica.cruz@uaq.mx; cai@uaq.edu.mx',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'442-192-12-00 EXT. 42000 ',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 12, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(175,6,utf8_decode('Edificio del Patronato de la Universidad Autónoma De Querétaro. Prol. Corregidora Sur #21 Piso 1 int 101. Zona dos extendida, Centro. C.P. 66000'),1,'L');
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Patronato de la Universidad Autónoma De Querétaro.'),1,1,'L',0);

        $this->Ln();
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('ARCHIVO DE CONCENTRACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('M. en E. José Adrian Macías Rodríguez'),1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'adrian.macias@uaq.mx',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'442-192-12-00 EXT. 42000 ',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 12, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(175,6,utf8_decode('Edificio del Patronato de la Universidad Autónoma De Querétaro. Prol. Corregidora Sur #21 Piso 1 int 101. Zona dos extendida, Centro. C.P. 66000'),1,'L');
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Patronato de la Universidad Autónoma De Querétaro.'),1,1,'L',0);

        $this->Ln();
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('ARCHIVOS ELECTRÓNICOS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Ing. Alejandra Cervantes Pérez'),1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'alejandra.cervantes.perez@uaq.mx',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'442-192-12-00 EXT. 42000 ',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 12, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(175,6,utf8_decode('Edificio del Patronato de la Universidad Autónoma De Querétaro. Prol. Corregidora Sur #21 Piso 1 int 101. Zona dos extendida, Centro. C.P. 66000'),1,'L');
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Patronato de la Universidad Autónoma De Querétaro.'),1,1,'L',0);

        $this->Ln();
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CONSERVACIÓN Y PRESERVACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Lic. Elsa Patricia Mata Araiza'),1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'elsa.mata@uaq.mx',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'442-192-12-00 EXT. 42000 ',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 12, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(175,6,utf8_decode('Edificio del Patronato de la Universidad Autónoma De Querétaro. Prol. Corregidora Sur #21 Piso 1 int 101. Zona dos extendida, Centro. C.P. 66000'),1,'L');
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Patronato de la Universidad Autónoma De Querétaro.'),1,1,'L',0);

        $this->Ln();
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('VALORACIÓN DOCUMENTAL'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Lic. Diana Esther Resendís Martínez'),1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'diana.esther.resendiz@uaq.mx',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,'442-192-12-00 EXT. 42000 ',1,1,'L',0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 12, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->MultiCell(175,6,utf8_decode('Edificio del Patronato de la Universidad Autónoma De Querétaro. Prol. Corregidora Sur #21 Piso 1 int 101. Zona dos extendida, Centro. C.P. 66000'),1,'L');
        $this->SetTextColor(255, 255, 255);
        $this->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(175,6,utf8_decode('Patronato de la Universidad Autónoma De Querétaro.'),1,1,'L',0);
        $this->Ln();

        $this->AddPage();
    }
}



$conexion=mysqli_connect("localhost","root","","sagad");
    $sql = "SELECT U.ID_Rat, U.Name_RAT, U.email, U.ext, U.location, A.Nombre_AP, D.Titu_UA_UAC FROM users U 
    JOIN area_productora A ON U.FK_IP_AP = A.id_AP 
    JOIN unidad_administrativa D ON U.Fk_ID_UA_UAC = D.ID_UA_UAC";
    $resultado = mysqli_query($conexion, $sql);

    $pdf = new PDF('L');

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);

    $pdf->cai();

    while ($row=$resultado->fetch_assoc()) {

        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetFillColor(0, 102, 153);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('UNIDAD ADMINISTRATIVA / ACADÉMILA'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,utf8_decode($row['Titu_UA_UAC']),1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('ÁREA PRODUCTORA'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,utf8_decode($row['Nombre_AP']),1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('CVO'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,$row['ID_Rat'],1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('RESPONSABLE DE ARCHIVO DE TRÁMITE'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,utf8_decode($row['Name_RAT']),1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('CORREO'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,$row['email'],1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('TELEFÓNO EXT'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,$row['ext'],1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('UBICACIÓN'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,utf8_decode($row['location']),1,1,'L',0);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(100, 6, utf8_decode('CAMPUS'), 1, 0, 'L', 1);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(175,6,utf8_decode('NA'),1,1,'L',0);
        $pdf->Ln(3);
    } 
    $pdf->Output();
?>
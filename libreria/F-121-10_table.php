<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{

    function Header()
    {
        $this->image('../img/uaq.jpg', 10, 10, 17);

        $this->Cell(25);
        $this->SetFont('Arial', '', 8);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(129, 6, utf8_decode('UNIVERSIDAD AUTÓNOMA DE QUERÉTARO'), 0, 2, 'L', 1);
        $this->Cell(129, 6, utf8_decode('SISTEMA UNIVERSITARIO DE ARCHIVOS'), 0, 2, 'L', 1);

        $this->SetFont('Arial', 'B', 9);
        // Movernos a la derecha
        $this->Cell(130, 6, utf8_decode('F-121-10 INVENTARIO GENERAL'), 0, 2, 'L', 1);

        $this->Ln(10);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);
        $this->SetX(11);
        $this->Cell(100, 7, 'FONDO', 1, 2, 'L', 1);
        $this->Cell(100, 7, utf8_decode('UNIDAD ADMINISTRATIVA / ACADÉMILA'), 1, 2, 'L', 1);
        $this->Cell(100, 7, utf8_decode('ÁREA PRODUCTORA'), 1, 2, 'L', 1);
        $this->Cell(100, 7, utf8_decode('Responsable Archivo de Trámite'), 1, 2, 'L', 1);
        $this->Cell(100, 7, utf8_decode('Sección'), 1, 2, 'L', 1);
        $this->Cell(100, 7, 'Serie', 1, 2, 'L', 1);

        $this->Ln(5);
        $this->SetFont('Arial', 'B', 10);
        $this->SetX(11);
        $this->Cell(15.88, 9, 'CVO', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'FONDO', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'SECC', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'SERIE', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'SUB', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'SSB', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'CAJA AT', 1, 0, 'C', 1);
        $this->Cell(17.5, 9, 'UAD/UAC', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'AP', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, utf8_decode('AÑO'), 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'IDAT', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'CVO2', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'NOMBRE', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'AC/AH', 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'CAJA AC', 1, 0, 'C', 1);
        $this->Cell(17.5, 9, utf8_decode('Ubicación'), 1, 0, 'C', 1);
        $this->Cell(15.88, 9, 'Cierre', 1, 0, 'C', 1);
    }

    protected $widths;
    protected $aligns;

    function SetWidths($w)
    {
        // Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        // Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        // Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x, $y, $w, $h);
            // Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            // Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if (!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', (string) $txt);
        $nb = strlen($s);
        if ($nb > 0 && $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    function bottom()
    {
        $this->Ln(15);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(275, 7, utf8_decode('Elaboró'), 1, 2, 'C', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetWidths(array(25, 200, 50));
        $this->Row(array(utf8_decode('Elaboró (RAT)'), '', 'Firma'));

        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(275, 7, utf8_decode('Autorización'), 1, 2, 'C', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetWidths(array(25, 200, 50));
        $this->Row(array('Titular    (UA/A)', '', 'Firma'));
        $this->Row(array('Director   (AP)', '', 'Firma'));
        $this->Row(array('Coordinador (AP)', '', 'Firma'));

        $this->Ln(5);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(100, 4, 'Abreviaturas', 0, 2, 'L', 0);
        $this->SetFont('Arial', '', 9);
        $this->Cell(100, 4, utf8_decode('RAT-Responsable de Archivo de Trámite, UA/A- Unidad Administriva/Académica'), 0, 2, 'L', 0);
        $this->Cell(100, 4, utf8_decode('AP-Área Productora, AT - Identificador de Archivo de Trámite designado por la Coordinación de Archivo Institucional'), 0, 2, 'L', 0);
        
    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 10, utf8_decode('Nivel de Revisión 01'), 0, 0, 'C');
    }
}
?>
<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{

    function Header()
    {
        $this->image('../img/UAQ_escudo.png', 10, 10, 60);
        $this->image('../img/coordinacion.png', 260, 6, 35);

        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);

        // Movernos a la derecha
        $this->Cell(70);

        // Título
        $this->Cell(150, 10, utf8_decode('CUADRO GENERAL DE CLASIFICACIÓN ARCHIVÍSTICA CGCA - UAQ'), 0, 0, 'C', 1);
        // Salto de línea

        $this->Ln(25);
        $this->SetFont('Arial', 'B', 10);
        $this->SetX(10);
        $this->Cell(8, 9, 'S', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'SE', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'SU', 1, 0, 'C', 1);
        $this->Cell(12, 9, 'SUB', 1, 0, 'C', 1);
        $this->Cell(34, 9, 'Nombre S', 1, 0, 'C', 1);
        $this->Cell(34, 9, 'Nombre SE', 1, 0, 'C', 1);
        $this->Cell(34, 9, 'Nombre SU', 1, 0, 'C', 1);
        $this->Cell(34, 9, 'Nombre SUB', 1, 0, 'C', 1);
        $this->Cell(105, 9, 'Descripcion', 1, 0, 'C', 1);
        $this->Ln(9);
    }

    function extra(){
        $this->image('../img/blanco.jpg', 9, 35, 280, 11);
        $this->SetFont('Arial', 'B', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(278));
        $this->row(array(utf8_decode('ABREVIATURAS')));
        $this->SetFont('Arial', '', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('S'), utf8_decode('Sección')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('SE'), utf8_decode('Serie')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('SU'), utf8_decode('Subserie')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('SUB'), utf8_decode('Subsubserie')));
    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 7);
        $this->Cell(0,10,utf8_decode('Página ') .$this->PageNo(),0,0,'C');
        $this->Cell(0, 4, utf8_decode('CGCA-UAQ'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('Versión 2.0'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('30/06/2023'), 0, 1, 'R');
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
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 5*$nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x,$y,$w,$h);
            // Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            // Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if(!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
        $s = str_replace("\r",'',(string)$txt);
        $nb = strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while($i<$nb)
        {
            $c = $s[$i];
            if($c=="\n")
            {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep = $i;
            $l += $cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i = $sep+1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }
}
?>
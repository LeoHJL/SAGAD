<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{

    function Header()
    {
        $this->SetX(35);
        $this->SetFont('Arial', '', 6);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(140, 4, utf8_decode('UNIVERSIDAD AUTÓNOMA DE QUERÉTARO'), 'LTR', 2, 'L', 1);
        $this->Cell(140, 4, utf8_decode('SISTEMA UNIVERSITARIO DE ARCHIVOS'), 'LR', 2, 'L', 1);

        $this->SetFont('Arial', 'B', 7);
        // Movernos a la derecha
        $this->Cell(140, 4, utf8_decode('F-121-04 ETIQUETA PARA CAJA DE ARCHIVO'), 'LBR', 2, 'L', 1);

        $this->Cell(140, 10, '', 1, 2, 'C', 1);
        $this->SetFont('Arial', 'B', 20);
        $this->image('img/UAQ_escudo.png', 40, 40, 60);
        

    }

    function contenido() {

        $this->SetX(105);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(70, 15, 'CAJA', 1, 2, 'C', 0);
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(70, 25, '', 1, 2, 'C', 0);
        $this->SetX(35);
        $this->SetFont('Arial', '', 9);
        $this->SetWidths(array(70,70));
        $this->row(array(utf8_decode('UNIDAD ADMINISTRATIVA / ACADÉMICA'), ''));
        $this->SetX(35);
        $this->SetWidths(array(70, 70));
        $this->row(array(utf8_decode('ÁREA PRODUCTORA'), ''));
        $this->SetX(35);
        $this->SetWidths(array(70, 70));
        $this->row(array(utf8_decode('NÚMERO DE EXPEDIENTES'), ''));
        $this->SetX(35);
        $this->SetWidths(array(70, 35, 35));
        $this->row(array('FECHAS EXTREMAS', '', ''));
        $this->SetX(35);
        $this->SetWidths(array(70, 70));
        $this->row(array('OBSERVACIONES', ''));
        $this->SetX(35);
        $this->SetWidths(array(8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75,8.75));
        $this->row(array('A', 'J/L', 'F/C', 'AT', '', 'AC', '', 'T', '', 'BD', 'H', 'M', 'D', 'P', 'R', 'C'));

        $this->SetX(125);
        $this->Cell(70, 10, utf8_decode('Nivel de Revisión 01'), 0, 2, 'C', 0);
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
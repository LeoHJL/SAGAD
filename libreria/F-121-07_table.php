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
        $this->Cell(130, 6, utf8_decode('F-121-07 CARÁTULA ESTANDARIZADA DE EXPEDIENTE'), 0, 2, 'L', 1);

        $this->Ln(15);
        $this->SetFont('Arial', 'B', 20);
        $this->SetX(11);
        $this->Cell(40, 40, 'FONDO', 1, 2, 'C', 1);
        $this->image('../img/UAQ_escudo.png', 90, 50, 60);

    }

    function contenido() {

        $this->SetWidths(array(40, 54, 40, 54));
        $this->row(array(utf8_decode('UNIDAD ADMINISTRATIVA / ACADÉMICA'), '',utf8_decode('ÁREA PRODUCTORA'), ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 27, 27, 40, 27, 27));
        $this->row(array(utf8_decode('Sección'), '', '', 'Serie', '', '') );
        $this->SetX(11);
        $this->SetWidths(array(40, 27, 27, 40, 27, 27));
        $this->row(array('Subserie', '', '', 'Subsubserie', '', ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 18, 18, 18, 40, 18, 18, 18));
        $this->row(array('Fecha de apertura', '', '', '', 'Fecha de Cierre', '', '', ''));
        $this->SetX(11);
        $this->SetWidths(array(188));
        $this->row(array('Asunto: '));
        $this->SetX(11);
        $this->SetWidths(array(40, 30, 19.33, 30, 19.33, 30, 19.33));
        $this->row(array(utf8_decode('Valoración primaria'),'Administrativo', '', utf8_decode('Jurídico/legal'),'', 'Fiscal/contable', ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 30, 19.33, 30, 19.33, 30, 19.33));
        $this->row(array(utf8_decode('Plazos de conservación'),'AT', '', 'AC','', 'Total', ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 30, 7, 30, 7, 30, 7, 30, 7));
        $this->row(array(utf8_decode('Disposición documental'),'Baja documental', '', utf8_decode('Histórico'),'', 'Muestreo', '', 'Dig.', ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 30, 19.33, 30, 19.33, 30, 19.33));
        $this->row(array('Acceso',utf8_decode('Público'), '', 'Reservado','', 'Confidencial', ''));
        $this->SetX(11);
        $this->SetWidths(array(40, 54, 40, 54));
        $this->row(array('Caja', '','Hojas', ''));

    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 10, utf8_decode('Nivel de Revisión 01'), 0, 0, 'C');
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
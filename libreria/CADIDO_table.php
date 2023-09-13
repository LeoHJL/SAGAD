<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{

    function Header()
    {
        $this->image('img/UAQ_escudo.png', 10, 10, 60);
        $this->image('img/coordinacion.png', 260, 6, 35);

        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(0, 102, 153);
        $this->SetTextColor(255, 255, 255);

        // Movernos a la derecha
        $this->Cell(90);

        // Título
        $this->Cell(130, 10, 'CATALOGO DE DISPOSICION DOCUMENTAL CADIDO - UAQ', 0, 1, 'C', 1);
        // Salto de línea

        $this->Ln(15);
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
        $this->Cell(8, 9, 'A', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'J/L', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'F/C', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'AT', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'AC', 1, 0, 'C', 1);
        $this->Cell(10, 9, 'Total', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'BD', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'M', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'H', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'D', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'P', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'R', 1, 0, 'C', 1);
        $this->Cell(8, 9, 'C', 1, 1, 'C', 1);
    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetFont('Arial', '', 7);
        $this->Cell(0, 4, utf8_decode('Página ') . $this->PageNo(), 0, 0, 'C');
        $this->Cell(0, 4, utf8_decode('CADIDO-UAQ'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('Versión 2.0'), 0, 1, 'R');
        $this->Cell(0, 4, utf8_decode('30/06/2023'), 0, 1, 'R');
    }

    function extra()
    {
        $this->image('img/blanco.jpg', 9, 35, 280, 11);
        $this->SetFont('Arial', 'B', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('COMPROBACIÓN ADMINISTRATIVA INMEDIATA'), utf8_decode('Son creados y recibidos por la Universidad en el despacho de trámites administrativos, por lo tanto, una vez concluída su vigencia, se elimina bajo supervisión')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Documento'), utf8_decode('Vigencia'), utf8_decode('Descripción')));
        $this->SetFont('Arial', '', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Fotocopias simples'), utf8_decode('Un año'), utf8_decode('Sirven como respaldo de un documento original mientras se realiza un trámite o una gestión. No adquiere ningún tipo de valor primario o secundario')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Copias de conocimiento'), utf8_decode('Un año'), utf8_decode('Copias de oficios de conocimiento que no requieren llevar a cabo un trámite o gestión. No adquiere ningún tipo de valor primario o secundario')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Circulares y memorándum'), utf8_decode('Tres años'), utf8_decode('Sirven para extender y compartir información de manera general en la Universidad, pero no forman parte de una función y no generan un trámite o gestión en específico. Solo serán documentos de archivo para el registro de la oficialía de partes cuando sea esta el área encargada de su distribución')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Curriculum vitae'), utf8_decode('Un año'), utf8_decode('Cuando no forman parte de un expediente original de personal o trabajador universitario. Pueden ser el resultados de convocatoria para plazas de trabajadores en cuyos procesos no fueron seleccionados. Solo forman parte de un documento de archivo cuando son resguardados por la Dirección de Recursos Humanos')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Cotizaciones'), utf8_decode('Un año'), utf8_decode('Que no formen parte de un procedimiento de adquisición o compra')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Reportes de estados financieros'), utf8_decode('Un año'), utf8_decode('Cuando carecen de firmas autógrafas, sellos originales o de autenticidad, o impresas de los Sistemas Financieros de la Universidad')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Pólizas de garantía vencidas'), utf8_decode('Un año'), utf8_decode('')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Formatos en blanco'), utf8_decode('Un año'), utf8_decode('Formatos que formaron parte de un procedimiento y no se encuentran vigentes')));

        $this->SetFont('Arial', 'B', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('APOYO INFORMATIVO'), utf8_decode('No son creados por la institución, generalmente es información recabada para apoyo de alguna tarea, pueden ser ejempla múltiples que no son consideradas patrimonio documental, carecen de valores primarios y secundarios, por lo tanto, no se requiere supervisión para su eliminación.')));
        $this->SetFont('Arial', '', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Borradores'), utf8_decode('Al término de su uso'), utf8_decode('Documentos que fungieron como versión inicial de un trámite o proyecto y que no forman parte del expediente')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Impresiones de correo electrónico'), utf8_decode('Al término de su uso'), utf8_decode('Cuando no son parte escencial del expediente original y han servido como soporte de apoyo para atender un trámite o gestión')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Leyes impresas'), utf8_decode('Al término de su uso'), utf8_decode('Leyes, reglas, lineamientos, estatutos, instrumentos, códigos, normas, estándares, instrumentos jurídicos que no forman parte de la legislación universitaria, o bien, que han sido impresos pero no forman parte de las funciones sustantivas de la Universidad.')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Manuales de equipo'), utf8_decode('Al término de su uso'), utf8_decode('Vienen incluídos en equipos de cómputo, de oficina, recursos materiales, recursos tecnológicos, etc.')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Agendas, libretas, notas, block, apuntes'), utf8_decode('Al término de su uso'), utf8_decode('No forman parte de documentos de archivo y no adquieren ningún tipo de valor primario o secundario')));
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Impresiones de manuales de procesos y procedimientos'), utf8_decode('Al término de su uso'), utf8_decode('Al ser impresos pierden su calidad de documentos controlado, por lo tanto no forman de documentos originales de Archivo, a execpción de los que resguara la Oficina de Gestión de Calidad')));

        $this->SetFont('Arial', 'B', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('Documentos en específico'), utf8_decode('')));
        $this->SetFont('Arial', '', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(92.66, 92.66, 92.66));
        $this->row(array(utf8_decode('Invitaciones, felicitaciones, trípticos'), utf8_decode('Muestreo'), utf8_decode('La Coordinación de Archivo Institucional realizará un muestreo previa eliminación, para valorar la pertinencia de invitaciones o felicitaciones que por su relevancia pudiera adquirir un valor relevante social o histórico')));
        $this->image('img/blanco.jpg', 9, 32.5, 280, 11);
   
        $this->SetFont('Arial', 'B', 5.5);
        $this->SetX(10);
        $this->SetWidths(array(280));
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
        $this->row(array(utf8_decode('A'), utf8_decode('Administrativo')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('J/L'), utf8_decode('Jurídico / Legal')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('F/L'), utf8_decode('Fiscal / Contable')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('AT'), utf8_decode('Archivo de Trámite')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('AC'), utf8_decode('Archivo de Concentración')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('BD'), utf8_decode('Baja Documental')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('M'), utf8_decode('Muestreo')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('H'), utf8_decode('Histórico')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('D'), utf8_decode('Digitalización')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('P'), utf8_decode('Público')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('R'), utf8_decode('Reservado')));
        $this->SetX(10);
        $this->SetWidths(array(139, 139));
        $this->row(array(utf8_decode('C'), utf8_decode('Confidencial')));
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
}
?>
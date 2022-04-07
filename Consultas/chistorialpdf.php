<?php
include "../registros/conec.php";
//llamando archivo fpdf 
require ("../fpdf/fpdf.php");

class PDF extends FPDF{
// Cabecera de página
function Header(){
    // Logo
    //$this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(60,10,utf8_decode('Historial de casos atendidos'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',10);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
//$pdf->Cell(1);
//------------------------------------------
        $pdf->Cell(10,8,utf8_decode('Caso'),0,0,'l',0);
        $pdf->Cell(22,8,'Fecha',0,0,'C',0);
        $pdf->Cell(22,8,'Criticidad ',0,0,'l',0);
        $pdf->Cell(14,8,'Equipo',0,0,'l',0);
        $pdf->Cell(22,8,'Atendido',0,0,'C',0);
        $pdf->Cell(20,8,utf8_decode('Soluciones'),0,1,'l',0);
//-----------------------------------------------------------
$pdf->SetFont('Arial','',10);

$consultas ="SELECT eventos.id_caso, eventos.fecha, eventos.id_equipo, eventos.fecha_atn, criticidad.criticidad, soluciones.solucion FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN soluciones ON eventos.id_caso = soluciones.id_caso WHERE eventos.estado ='atendido' ORDER BY eventos.fecha_atn";

$historial = mysqli_query($coneccion,$consultas);



if(!$historial){
    echo"--Error-- No se pudo cargar el historial";
}else{
    while($evento = mysqli_fetch_assoc($historial)){
        
        $pdf->Cell(10,8, utf8_decode($evento['id_caso']),0,0,'C',0);
        $pdf->Cell(22,8,utf8_decode($evento['fecha']),0,0,'l',0);

        $pdf->Cell(22,8, utf8_decode($evento['criticidad']),0,0,'C',0);   
        $pdf->Cell(14,8, utf8_decode($evento['id_equipo']),0,0,'C',0);

        $pdf->Cell(22,8, utf8_decode($evento['fecha_atn']),0,0,'l',0);      
        $pdf->MultiCell(100,8,utf8_decode($evento['solucion']) ,0,'j',0);
        
       // $pdf->Cell(100,10,utf8_decode('Correo : '),0,1,'R',0); 
    }
}


mysqli_close($coneccion);

$pdf -> Cell(70,8,utf8_decode('fecha de impresión :').date("d/m/Y") ,0,1,'C',0);

$pdf -> Output();
?>

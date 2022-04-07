<?php
include "conec.php";
//llamando archivo fpdf 
require ("../fpdf/fpdf.php");

class PDF extends FPDF{
// Cabecera de página
function Header(){
    // Logo
    //$this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(60,10,utf8_decode('Historial de casos atendidos por fechas'),0,0,'C');
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
$pdf->SetFont('Arial','',14);
$pdf->Cell(1);

//$nu_factura =$_POST["numerofactura"];

$consultas ="SELECT eventos.id_caso, eventos.fecha, eventos.id_equipo, eventos.fecha_atn, criticidad.criticidad, soluciones.solucion FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN soluciones ON eventos.id_caso = soluciones.id_caso WHERE eventos.estado ='atendido' ORDER BY eventos.fecha_atn";

$historial = mysqli_query($coneccion,$consultas);



if(!$historial){
    echo"--Error-- No se pudo cargar el historial";
}else{
    while($evento = mysqli_fetch_assoc($historial)){
        
        $pdf->Cell(75,8,utf8_decode('Caso Número: ').12345,0,0,'l',0);
        $pdf->Cell(5);
        $pdf->Cell(50,8,'Fecha : '. $evento['fecha'],0,0,'R',0);
        $pdf->Cell(10);
        $pdf->Cell(40,8,utf8_decode('Caso N°: '). $evento['id_caso'],0,1,'R',0);
        $pdf->Cell(180,10,'' ,0,1,'C',0);
        
        $pdf->Cell(45);
        $pdf->Cell(100,8,'',0,1,'C',0);
        $pdf->Cell(165,8,'Datos Del Evento' ,0,1,'C',0);
        
        $pdf->Cell(120,10,'Id Usuario: '.utf8_decode($evento['id_usuario']) ,0,0,'l',0);
        $pdf->Cell(65,10,'Nivel Crítico : '.$evento['criticidad'],0,1,'R',0);
        
        $pdf->Cell(70,10,'Id Equipo: '.utf8_decode($evento['id_equipo']),0,0,'l',0);
        $pdf->Cell(115,10,'Fecha Atencion : '.$evento['fecha_atn'],0,1,'R',0);
        
        $pdf->Cell(50,10,$evento['solucion'] ,0,0,'l',0);
        $pdf->Cell(35,10,$evento['fecha_atn'] ,0,0,'l',0);
       // $pdf->Cell(100,10,utf8_decode('Correo : ').$mi_factura['email'] ,0,1,'R',0); 
    }
}


mysqli_close($coneccion);

$pdf -> Cell(70,8,utf8_decode('fecha de impresión :').date("d/m/Y") ,0,1,'C',0);

$pdf -> Output();
?>

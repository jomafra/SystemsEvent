<!DOCTYPE html>
<html lang="en">
<?php
session_start();
//error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil    =$_SESSION['perfil'];

if(($perfil != 3) or ($varsesion =='')){
    echo '<h3>Usted no tiene permiso para usar esta aplicación</h3>';
    die();
}
require_once ("layout/cabecerahtml.php");
include "registros/conec.php";

//-------------------------------------------------------

$where_caso ='';
$where_fecha ='';
$where_usuario ='';

if($_POST['caso']!=''){
    $where_caso ='AND soluciones.id_caso ='.$_POST['caso'];
}
if($_POST['fecha']!=''){
    $where_fecha ='AND soluciones.fecha_atn ='.$_POST['fecha'];
}
if($_POST['usuario']!=''){
    $where_usuario ='AND soluciones.id_usuario ='.$_POST['usuario']; 
}   
    
//-------------------------------------------------------
    
?>
<body>
<?php
    require_once ("layout/header.php");
    
?>
    <div class=" container"> 
        <div class="row">
            <div class="col-lg-3 mt-2">
                <?php
                    require_once("layout/ladoizq.php");
                ?>
                <a  class='btn btn-primary form-control mt-2' href='consultas/chistorialpdf.php'><h5>GENERAR PDF</h5></a>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-8 mt-2">
                <?php
            
                    require_once("Consultas/chistorial.php");
                ?>
            </div>
        </div>
    </div> 
</body>
</html>

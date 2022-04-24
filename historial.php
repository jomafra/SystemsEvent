<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil    =$_SESSION['perfil'];

if(($perfil != 3) or ($varsesion =='')){
    echo '<h3>Usted no tiene permiso para usar esta aplicación</h3>';
    die();
}
require_once("layout/cabecerahtml.php")
?>
<body>
<?php require_once ("layout/header.php"); ?>

    <div class="container"> 
        <div class="row">
            <div class="col-lg-3 mt-2">
                <?php 
                    require_once("layout/ladoizq.php");
                ?>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-8 mt-2">
            <h3 class="text-white text-center">HISTORIAL DE EVENTOS</h3>
                <?php require_once("formularios/filtro_hist.php"); ?>
            </div>
        </div>
    </div> 
</body>
</html>

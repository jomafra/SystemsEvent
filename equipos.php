<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil    = $_SESSION['perfil'];

if( ($varsesion == '')or($perfil !=3) ){
    echo '<h3>Usted no tiene permiso para ingresar equipos</h3>';
    header("refresh: 2; url= eventos.php");
    die();
}
require_once("layout/cabecerahtml.php");
?>

<body>
    <header>
            <?php require_once ("layout/header.php"); ?>
    </header>

    <div class="container"> 
        <div class="row">
            <div class="col-lg-3 mt-2">
                    <?php require_once("layout/ladoizq.php"); ?>                
            </div>
            <div class="col-lg-9 mt-3">
                <div class="row">
                    <?php require_once("formularios/fequipos.php"); ?>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
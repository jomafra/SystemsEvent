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
<header>
    <?php require_once ("layout/header.php"); ?>
</header>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-3 mt-2">
                <?php 
                    require_once("layout/ladoizq.php");
                ?>
                <a  class='btn btn-primary form-control mt-3' href='consultas/chistorialpdf.php'>GENERAR PDF</a>
            </div>
            <div class="col-lg-9 mt-3">
            <h3 class="text-white text-center">HISTORIAL DE EVENTOS</h3>
                <?php require_once("consultas/chistorial.php"); ?>
            </div>
        </div>
    </div> 
</body>
</html>

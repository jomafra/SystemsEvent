<!DOCTYPE html>
<html lang="en">
<?php
session_start();
//error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil     = $_SESSION['perfil'];

if(($varsesion =='') or ($perfil != 3)){
    echo '<h3>Usted no tiene permiso para usar esta aplicación</h3>';
    header(' refresh: 2; url= eventos.php');
    die();
}
require_once("layout/cabecerahtml.php");
?>
<body>
<?php
require_once("layout/header.php");
?>  
   <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-2">
                <?php
                    require_once("layout/ladoizq.php");
                ?>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-8 mt-3">
                <h3 class="text-white text-center">SOLUCION</h3>
            <?php
                
                require_once("formularios/fsolucion.php");
            ?>
            </div>
        </div>          
    </div>           
</body>
</html>

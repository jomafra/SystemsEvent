<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil       = $_SESSION['perfil'];

    if ($varsesion ==''){
        echo "Usted debe registrarse para usar esta aplicación";
        header("refresh: 2; url= usuarios.php");
        die();
    }
    require_once("layout/cabecerahtml.php");
?>
<body>
<?php require_once ("layout/header.php"); ?>

    <div class="container"> 
        <div class="row">        
                <?php 
                    if ($perfil == 3){
                        echo'<div class="col-lg-3 mt-2">';
                        require_once("layout/ladoizq.php");
                        echo'</div>';
                    }
                ?> 
                <div class="col-lg-1">
                </div>                        
                <div class="col-lg-8 mt-2">
                    <?php
                        require_once("formularios/feventos.php");
                    ?>
                </div>
        </div>
    </div> 
</body>
</html>
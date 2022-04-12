<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    error_reporting(0);
        $varsesion = $_SESSION['usuario'];
        $perfil    = $_SESSION['perfil'];
    

    require_once("layout/cabecerahtml.php");
    require_once("layout/header.php");
?>
<body>
    <div class="container"> 
        <div class='row'>
            <div class='col-lg-3 mt-2'>
                <?php   
                    if($perfil== 3){
                        require_once("layout/ladoizq.php");
                    }     
                    
                ?> 
            </div>               
            <div class="col-lg-1"></div>
            <div class="col-lg-8 mt-2">
                <?php require_once("formularios/fusuarios.php"); ?>
            </div>
        </div>
    </div> 
</body>
</html>
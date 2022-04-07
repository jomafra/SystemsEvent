<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil     = $_SESSION['perfil'];

if(($varsesion =='') or ($perfil !=3)){
    echo '<h3>Usted no tiene permiso para usar esta aplicación</h3>';
    //header(' refresh: 2; url= index.php');
    die();
}
require_once("layout/cabecerahtml.php");
?>
<body>
<header>
    <?php require_once ("layout/header.php"); ?>
</header>

    <div class="container">
        <div class='row' >
            <?php 
                if ($perfil == 3){
                    echo'<div class="col-lg-3 mt-2">';
                    require_once("layout/ladoizq.php");
                    echo'</div>';
                }
            ?>   
            <div class="col-lg-9 mt-2">
                <?php
                    require_once("formularios/fcriticidad.php")
                ?>
            </div>
        </div>
    </div>
</body>
</html>

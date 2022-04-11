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
<header>
    <?php require_once ("layout/header.php"); ?>
</header>
    <div class="container"> 
        <div class="row">
            
                <?php 
                    if ($perfil == 3){
                        echo'<div class="col-lg-3 mt-2">';
                        require_once("layout/ladoizq.php");
                        echo'</div>';
                    }
                ?>                
            
            <div class="col-lg-9 mt-3">
                <div class="row">
                <?php
                        require_once("formularios/feventos.php");
                    ?>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <link href="estilos/estilos.css" rel="stylesheet">
</head>
<body>
    <div class="lado-der">   
    <?php
        /*if ($perfil == 3){
            echo "<div class='tarjetero' >
                    <a  class='tarjeta' href='validar.php'>
                        <h4 >Bandeja Principal</h4>
                    </a>
            </div>";
        }else{
            echo "<div class='tarjetero' >
                    <h3>Bienvenido: $varsesion </h3><br>
                    <a  class='tarjeta' href='cerrar_sesion.php'>
                        <h4 >Cerrar Sesion</h4>
                    </a>
                </div>";
        
        }*/
?>
            <div class="padre">
                <div class="resultados">
                   
                </div>
            </div>
        </div>
    </body>
</html>-->
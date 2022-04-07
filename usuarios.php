<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil    = $_SESSION['perfil'];

require_once("layout/cabecerahtml.php");
require_once("layout/header.php");
?>

    <div class="container"> 
            <?php if ($perfil == 3){ 
                    echo"<div class='row'>
                    <div class='col-lg-3 mt-2'>";
                
                    require_once("layout/ladoizq.php");
                    echo"</div>";
                }
                ?>                
            
            <div class="col-lg-9 mt-3">
                <div class="row">
                <?php
                    require_once("formularios/fusuarios.php")
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
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" >
            <a  class="form-control btn btn-primary mt-1" href='index.php'>Login</a>
        </div>
        <div class="row">
            <div  class="col-lg-12">
            <?php
                    require_once("formularios/fusuarios.php")
                ?>
            </div>
        </div>
        <div class="row mt-2">
                <div class="col-lg-12">
                <input class="form-control btn btn-primary" type="submit" name="enviar" value="Registrarse">
                </div>
            </div>
    </div>
</body>
</html>
-->


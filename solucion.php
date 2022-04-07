<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
$perfil     = $_SESSION['perfil'];

if(($varsesion =='') or ($perfil != 3)){
    echo '<h3>Usted no tiene permiso para usar esta aplicación</h3>';
    //header(' refresh: 2; url= index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soluciones</title>
    <link href="estilos/estilos.css" rel="stylesheet">
</head>
<body>
    <div class="padre">
      <div class='tarjetero' >
              <a  class='tarjeta' href='validar.php'>
                  <h4 >Bandeja Principal</h4>
              </a>
      </div>
        <div class="resultados">
            <?php
                require_once("formularios/fsolucion.php");
            ?>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
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
    <div class="padre">
      
        <div class="resultados">
            <?php
                require_once("formularios/fsolucion.php");
            ?>
        </div>
    </div>
</body>
</html>

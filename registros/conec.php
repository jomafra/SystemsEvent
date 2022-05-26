<?php
$coneccion = mysqli_connect ("localhost","usuario","password","bd");
if(!$coneccion){
    echo"-Algo pasoó- no se pudo conectar a base de datos";
}

?>

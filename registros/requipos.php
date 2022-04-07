<?php
include "conec.php";

$fecha  =  date("Y/m/d");
$serial= $_POST["serial"];
$lugar= $_POST["lugar"];
$desc = $_POST["desc"];


//$consultac = "CREATE TABLE IF NOT EXISTS equipos (id_equipo INT(4)NOT NULL PRIMARY KEY AUTO_INCREMENT, fechaIngreso DATE ,serial VARCHAR(40) not null,lugarAsignado VARCHAR(50) not null,descripcion VARCHAR(255)not null)";

$consultai ="INSERT INTO equipos (fechaIngreso,serial,lugarAsignado,descripcion)VALUES ('$fecha','$serial','$lugar','$desc')";
//$consultad ="DELETE  FROM equipos WHERE:.....";

$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h3> <a href='../equipos.php'>-- VOLVER -- Su Equipo No se Ha Ingresado</a></h3>";

}else{
    echo '<h2>Su Equipo se ha Ingresado Exitosamente </h2>';
    
    header("refresh: 1; url=../equipos.php");

}


?>
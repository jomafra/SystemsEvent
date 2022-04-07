<?php

include "conec.php";

$nivel= $_POST["nivel"];

//establecer la consulta especifica en sql

//$consultac = "CREATE TABLE IF NOT EXISTS criticidad (id_criticidad INT(2)NOT NULL PRIMARY KEY AUTO_INCREMENT ,criticidad VARCHAR(30)NOT NULL)";
//-------
$consultai ="INSERT INTO criticidad (criticidad) VALUES ('$nivel')";
//-------

$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a href='../laboratorios.php'>-- Volver -- Su Intento Ha Fallado</a></h2>";
}else{
    //header("location:../ventas.php");
    //echo '<h2>Su Tabla se ha creado Exitosamente</h2>';
    echo '<h2>Su Nivel se ha ingresado Exitosamente</h2>';
    header("refresh: 1; url=../criticidad.php");

}

?>
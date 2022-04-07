<?php
include "conec.php";

$tipo_us  = $_POST["tipo_us"];

//$consultac = "CREATE TABLE IF NOT EXISTS tipos (id_tipo INT(3)NOT NULL  PRIMARY KEY AUTO_INCREMENT, tipo_usuario VARCHAR (30)NOT NULL)";
//$consultab ="DROP TABLE soporte";
$consultai ="INSERT INTO tipos (tipo_usuario) VALUES ('$tipo_us')";
//$consultad ="DELETE cual FROM soporte WHERE...";
//$consultas ="SELECT * FROM soporte";
$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a href='../tipos.php'>--VOLVER--Su Peticion NO se ha generado</a></h2>";
}else{
    //header("location:../soporte.php");
    //echo '<h2>Su Tabla se ha creado Exitosamente</h2>';
    echo '<h2>Su Tipo de Usuario se ha Ingresado Exitosamente</h2>';
    header("refresh: 1; url=../tipos.php");

}

?>
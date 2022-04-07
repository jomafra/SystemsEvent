<?php
include "conec.php";

$cargo= $_POST["cargo"];

//$consultac = "CREATE TABLE IF NOT EXISTS cargos (id_cargo INT(3)NOT NULL PRIMARY KEY AUTO_INCREMENT ,cargo VARCHAR(40) NOT NULL)";
//---------
//$consultab ="DROP TABLE cargoS";
//---------
$consultai ="INSERT INTO cargos (cargo) VALUES ('$cargo')";
//---------
//$consultad ="DELETE FROM cargos WHERE ....";
//---------
//$consultas ="SELECT * FROM cargos";

$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a href='../cargos.php'>-- VOLVER -- Su Intento ha Fallado</a></h2>";
}else{
    //header("location:../categorias.php");
    //echo '<h2>Su Tabla se ha creado Exitosamente</h2>';
    echo '<h2>Su Categoria se ha Ingresado Exitosamente</h2>';
    header("refresh: 1; url=../cargos.php");

}

?>
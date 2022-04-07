<?php
include "conec.php";

$categoria= $_POST["categ"];

//$consultac = "CREATE TABLE IF NOT EXISTS categorias (id_categoria INT(3)NOT NULL PRIMARY KEY AUTO_INCREMENT ,categoria VARCHAR(25)NOT NULL)";
//------
//$consultab ="DROP TABLE categorias";
//------
$consultai ="INSERT INTO categorias (categoria) VALUES ('$categoria')";
//-------
//$consultad ="DELETE FROM categorias WHERE.....";
//-------
//$consultas ="SELECT * FROM categorias";

$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a href='../categorias.php'>-- VOLVER -- Su Intento ha Fallado</a></h2>";
}else{
    //header("location:../categorias.php");
    //echo '<h2>Su Tabla se ha creado Exitosamente</h2>';
    echo '<h2>Su Categoria se ha Ingresado Exitosamente</h2>';
    header("refresh: 1; url=../categorias.php");

}

?>

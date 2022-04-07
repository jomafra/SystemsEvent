<?php
include "conec.php";

$fecha_atn =  date("Y/m/d");
$id_caso      = $_POST["id_caso"];
$estado      = "atendido";
$solucion   =$_POST["desc_sol"];

$consultau = "UPDATE  eventos SET fecha_atn ='$fecha_atn', estado='$estado' WHERE id_caso = $id_caso ";
$consultai = "INSERT  soluciones (fecha , id_caso, solucion ) VALUES ('$fecha_atn', $id_caso, '$solucion')";
//, descrip_sol='$desc_sol' 
//$consultad="DELETE FROM eventos....";
//$consultap ="DROP TABLE eventos";
//$consultat= "TRUNCATE TABLE eventos";
$resultadou = mysqli_query($coneccion, $consultau);
$resultadoi = mysqli_query($coneccion, $consultai);
mysqli_close($coneccion);

if(!$resultadou){
    echo"<h3>ERROR No se pudo Actualizar el Estado del evento</h3>";
    echo" <h2> <a href='../solucion.php'>Intente Nuevamente  ¡¡El Estado del evento no se ha actualizado!!</a></h2>";
}else{
    if(!$resultadoi){
        echo" <h2> <a href='../validar.php'>Intente Nuevamente  ¡¡La solucion No se ha Generado!!</a></h2>";

    }else{
        echo '<h2>El evento ha sido atendido exitosamente</h2>';
        header("refresh: 1; url=../validar.php");
    }

}

?>

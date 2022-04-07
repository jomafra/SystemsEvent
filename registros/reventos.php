<?php
include "conec.php";

$fecha     =  date("Y/m/d");
$nivel     = $_POST["nivel"];
$desc      = $_POST["desc"];
$equipo    = $_POST["idequipo"];
$usuario   = $_POST["usuario"];
$estado    = "pendiente";

//$consultac = "CREATE TABLE IF NOT EXISTS eventos (id_caso INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,fecha DATE not null, id_criticidad INT(2)not null, descripcion VARCHAR(255)not null, id_equipo INT(4)not null,id_usuario INT (4)not null,estado VARCHAR (20)not null)";

//$consultal = "ALTER TABLE EVENTOS ADD COLUMN estado VARCHAR (20)not null AFTER id_usuario ";

$consultai = "INSERT INTO eventos (fecha,id_criticidad,descripcion,id_equipo,id_usuario,estado) VALUES ('$fecha',$nivel,'$desc',$equipo,$usuario,'$estado')";

//$consultad="DELETE FROM casos....";
//$consultap ="DROP TABLE casos";
$resultado = mysqli_query($coneccion, $consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a href='../eventos.php'>Intente Nuevamente  ¡¡Su Evento NO se ha Generado!!</a></h2>";
}else{
    //header("location:../ventas.php");
    echo '<h2>Su Evento se ha generado exitosamente</h2>';
    header("refresh: 1; url=../eventos.php");

}

?>
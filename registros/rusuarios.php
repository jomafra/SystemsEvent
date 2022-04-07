<?php
include "conec.php";

$nombres      = $_POST["nombres"];
$apellidos    = $_POST["apellidos"];
$tipo_docu    = $_POST["tipo_doc"];
$num_docum    = $_POST["num_doc"];
$sexo         = $_POST["sexo"];
$perfil       = $_POST['perfil'];
$cargo        =$_POST["cargo"];
$telefono     = $_POST["telefono"];
$email        = $_POST["email"];
$password     = $_POST["contrasena"];
$pasw_cfrdo = password_hash($password, PASSWORD_DEFAULT);

//$consultac = "CREATE TABLE IF NOT EXISTS usuarios (id_usuario INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, nombres VARCHAR(30)not null,apellidos VARCHAR(30) not null,tipo_documento VARCHAR(30) not null,num_documento int(12)not null,sexo VARCHAR(12),id_perfil INT(2)not null,id_cargo int(2) not null,telefono VARCHAR(12),email VARCHAR(50)not null,contrasena CHAR(60) not null)";
$consultai = "INSERT INTO usuarios (nombres,apellidos,tipo_documento,num_documento,sexo,id_perfil,id_cargo,telefono,email,contrasena)VALUES('$nombres','$apellidos','$tipo_docu','$num_docum','$sexo','$perfil','$cargo','$telefono','$email','$pasw_cfrdo')";
//$consultaa ="ALTER TABLE usuarios CHANGE COLUMN tipo_usuario perfil INT(2)NOT NULL";
//$consultas ="SELECT * FROM usuarios";
//WHERE nombre_usuario = $nomb_usuario ";
//$consultab ="DELETE FROM usuarios ";
//$consultad ="DROP TABLE `usuarios`";
$resultado = mysqli_query($coneccion,$consultai);

mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al Ejecutar la consulta</h3>";
    echo" <h2> <a  href='../usuarios.php'>--VOLVER a Intentarlo--</a></h2>";
}else{
    //header("location: loguin.php");
    //echo '<h2>Su Tabla se ha creado Exitosamente</h2>';
    echo '<h2>Sus Datos se han Guardado Exitosamente</h2>';
    header("refresh: 1; url= ../index.php");

}



?>
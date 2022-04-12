<?php
include "conec.php";
$varsesion = $_SESSION['usuario'];

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

$consultai = "INSERT INTO usuarios (nombres,apellidos,tipo_documento,num_documento,sexo,id_perfil,id_cargo,telefono,email,contrasena)VALUES('$nombres','$apellidos','$tipo_docu','$num_docum','$sexo','$perfil','$cargo','$telefono','$email','$pasw_cfrdo')";

$resultado = mysqli_query($coneccion,$consultai);
mysqli_close($coneccion);

if(!$resultado){
    echo"<h3>ERROR al intentar registrarse</h3>";
    echo" <h2> <a  href='usuarios.php'>--VOLVER a Intentarlo--</a></h2>";
}else{
    echo '<h2>Sus Datos se han Guardado Exitosamente</h2>';
    if ($varsesion ==''){
        header("refresh: 1; url= index.php");
    }else{    
        header("refresh: 1; url= dashboard.php");
    }
    
}
?>
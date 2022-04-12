<?php
include "conec.php";

$email      = $_POST['miemail'];
$password   = $_POST['contrasena'];

$consultas ="SELECT email, contrasena, id_perfil FROM usuarios  WHERE ( email ='$email')";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion);

if($resultado){ 
    $mi_usuario = mysqli_fetch_assoc($resultado);  
    if(password_verify($password, $mi_usuario['contrasena'])){
        session_start();
        $_SESSION['usuario']=$email;
        $_SESSION['perfil']=$mi_usuario['id_perfil'];
        echo "<h2>Bienvenido a System's Event </h2>";
        header("refresh: 2; url= ../dashboard.php");
    }else{
        echo"<h2>Su Contraseña No Coincide</h2>";
        echo" <h2> <a href='../index.php'>Intentar Nuevamente</a></h2>";
    }
}else{
    echo"<h3>Error al intentar ingresar, es posible que udsted No este Registrado </h3>"; 
    echo" <h2> <a href='../usuarios.php'>Intente Registrarse</a></h2>";
}
?>

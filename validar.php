<?php
session_start();
error_reporting(0);

$varsesion   = $_SESSION['usuario'];
$perfil       = $_SESSION['perfil'];

if($perfil != 3){ 
    header("location: eventos.php");
    die();
}
    require_once('layout/layout.php');

?>

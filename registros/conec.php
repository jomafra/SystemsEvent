<?php

//$coneccion=mysqli_connect("localhost","root","","soseventbd");
$coneccion = mysqli_connect ("sql10.freesqldatabase.com","sql10485124","ZDS7x7KlRv","sql10485124");
if(!$coneccion){
    echo"-Algo pasoó- no se pudo conectar a base de datos";
}

?>
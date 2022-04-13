<?php
include "registros/conec.php";
$id_caso  = $_GET["updateid"];

$consultas="SELECT eventos.fecha,eventos.id_criticidad, eventos.descripcion, eventos.id_equipo,eventos.id_usuario, eventos.estado, criticidad.criticidad, equipos.serial, usuarios.nombres FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN equipos ON eventos.id_equipo = equipos.id_equipo INNER JOIN usuarios ON eventos.id_usuario = usuarios.id_usuario WHERE eventos.id_caso = $id_caso";
                
$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion);                
if(!$resultado){
    echo"--ERROR-- al Ejecutar la consulta";
}else{
    while($caso = mysqli_fetch_assoc($resultado)){  
        
        echo" <div class='container'>               
            <form action='registros/rsolucion.php' method='post' class='formulario'>
                <div class='row'>
                    <div class='card bg-primary mb-3 text-white' style='max-width: 60rem;'>
                        <div class='card-header'><h6>Id caso: $id_caso</h6></div>
                        <div class='card-header'><h6>Fecha: $caso[fecha]</h6></div>
                        <div class='card-header'><h6> Usuario: $caso[nombres]</h6></div>
                        <div class='card-header'><h6>Nivel de Criticidad: $caso[criticidad]</h6></div>
                        <div class='card-header'><h6> Id Equipo: $caso[id_equipo]</h6></div>

                        <div class='card-body'>
                            <h6 class='card-title'>Descripcion:</h6>
                            <p class='card-text'><h6>$caso[descripcion]</h6></p>
                        </div>

                        <input hidden type='number' name='id_caso' value='$id_caso'>

                        <div class=''>
                        <h6 class='card-title'> solucion</h6>
                        </div>
                        <div class=''>
                            <textarea name='desc_sol'  maxlength='255' cols='70' rows='5' ></textarea>
                        </div>

                        <div class=''>
                        <input type='submit' class='botones' value='Generar Atencion'>
                        </div>
                    
                    </div>
                </div>
            </form>
            
        </div>";
    }
}
?>

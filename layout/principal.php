<?php include "registros/conec.php";
$consultaj ="SELECT eventos.id_caso, eventos.fecha, eventos.descripcion, eventos.id_equipo,eventos.estado, criticidad.criticidad,usuarios.nombres FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN usuarios ON eventos.id_usuario = usuarios.id_usuario WHERE eventos.estado ='pendiente' ORDER BY eventos.id_criticidad DESC";
$resultado= mysqli_query($coneccion, $consultaj);
mysqli_close($coneccion);

    if(!$resultado){echo"Error al ejecutar la consulta";} else {
        while($list_casos= mysqli_fetch_assoc($resultado)){
            echo"<div class='row'>
                    <div class='card bg-primary mb-3 text-white' style='max-width: 60rem;'>
                        <div class='card-header'><h5>ID: $list_casos[id_caso]</h5></div>
                        <div class='card-header'><h5>FECHA: $list_casos[fecha]</h5></div>
                        <div class='card-header'><h5>NIVEL: $list_casos[criticidad]</h5></div>
                        <div class='card-header'><h5>USUARIO: $list_casos[nombres]</h5></div>

                        <div class='card-body'>
                            <h5 class='card-title'>Descripcion:</h5>
                            <p class='card-text'><h5>$list_casos[descripcion]</h5></p>
                        </div>
                        <a class='form-control btn btn-success' href='solucion.php?updateid=$list_casos[id_caso]'>Atender</a>
                    </div>
                </div>";
        }
    }
?>


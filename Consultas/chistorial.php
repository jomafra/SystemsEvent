<?php
include "registros/conec.php";
$consultas ="SELECT eventos.id_caso, eventos.fecha, eventos.id_equipo, eventos.fecha_atn, criticidad.criticidad, soluciones.solucion FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN soluciones ON eventos.id_caso = soluciones.id_caso WHERE eventos.estado ='atendido' ORDER BY eventos.fecha_atn";
$resultado = mysqli_query($coneccion, $consultas);
mysqli_close($coneccion);
?>
<div class="row">
        <table class="table table-active text-center text-white mt-">
            <tr>
                <th>CASOS</th>
                <th>FECHA EVENTO</th>
                <th>NIVEL</th>
                <th>EQUIPO</th>
                <th>ATENCION</th>
                <th>SOLUCION</th>
            </tr>
                    <?php
                    if(!$resultado){echo"Error al ejecutar la consulta";}else{
                    while($list_casos= mysqli_fetch_assoc($resultado)){
                    echo"
                    <tr><td>$list_casos[id_caso]</td>
                    <td style='width: 19%;'>$list_casos[fecha]</td>
                    <td>$list_casos[criticidad]</td>
                    <td>$list_casos[id_equipo]</td>
                    <td style='width: 15%;'>$list_casos[fecha_atn]</td>
                    <td>$list_casos[solucion]</td>";
                    }
                    }
                    ?>
        </table>
</div>    
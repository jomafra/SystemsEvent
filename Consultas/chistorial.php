<?php

$consultas ="SELECT 
            soluciones.id_caso,
            soluciones.fecha_atn,
            soluciones.solucion, 
            usuarios.nombres 
            FROM soluciones 
            INNER JOIN usuarios ON soluciones.id_usuario = usuarios.id_usuario
            $where_caso $where_fecha $where_usuario
            ORDER BY soluciones.fecha_atn DESC";

$resultado = mysqli_query($coneccion, $consultas);
mysqli_close($coneccion);

    echo"<div class='container'>
                <div class='card-header text-center text-white'>
                    <h4>Historial De Soluciones</h4>
                </div>
         </div>";
    if(!$resultado){
        echo"Error al ejecutar la consulta";
    }else{
        //si el numero de filas es menor que uno mostrar mensaje
        //"no se encontraron resultados"
        while($list_casos= mysqli_fetch_assoc($resultado)){       
            echo"
                <div class='container'>
                    <div class='row'>
                        <div class='card mb-3 text-black' style='max-width: 60rem;'>

                            <div class='card-header'>
                                <h5>Id evento : $list_casos[id_caso]</h5>
                            </div>
                            <div class='row '>
                                <div class='col-lg-6 mt-2'>
                                    
                                </div>
                                <div class='col-lg-6 mt-2'>
                                    
                                </div>   
                            </div>
                            <div class='row '>
                                <div class='col-lg-6 mt-2'>
                                    Atendido por: $list_casos[nombres]
                                </div>
                                <div class='col-lg-6 mt-2'>
                                    fecha atencion: $list_casos[fecha_atn]
                                </div>   
                            </div>
                            
                            <div class='card-body'>
                                <div class=' mt-2'>
                                    $list_casos[solucion]
                                </div>   
                            </div>
                            
                        </div>
                    </div>
                    </div>
                        ";
                               
        }
    }
?>

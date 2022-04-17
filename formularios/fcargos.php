<?php

include "registros/conec.php";
$consultas ="SELECT cargo FROM cargos ORDER BY cargo";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 
?>


<div class="container">
    <div class="row">
        <div class="col-lg-6">
        
            <form action="registros/rcargos.php" method="post" class="">

                <h4 class="text-white text-center ">
                        Ingreso de Cargos 
                </h4>
                <input class=" text-white form-control mt-3" type="text" required name="cargo" placeholder="Nuevo Cargo">

                <input type="submit" class= "btn btn-success form-control mt-2" value="Agregar Cargo">
            
            </form>
        </div>
                                                         
        <div class="col-lg-6">
            <h4 class="text-white text-center">Cargos existentes</h4>
            
        <?php
//---------------Listado de cargos existentes---------------   
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";

}else{
    while($list_car= mysqli_fetch_assoc($resultado)){
         echo"<div class= 'btn btn-primary form-control mt-2'>
                                $list_car[cargo]   
            </div>";
        }
} 
/*--------------------------------------------------------*/
        ?> 
                
        
        </div>
    </div>
    
</div>
<?php
include "registros/conec.php";


$consultas ="SELECT tipo_usuario FROM tipos ORDER BY id_tipo";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
        
            <form action="registros/rtipos.php" method="post" class="">

                <h4 class="text-white text-center ">
                        Ingreso de Perfiles 
                </h4>
                <input class=" text-white form-control mt-3" type="text" required name="cargo" placeholder="Nuevo Perfil">

                <input type="submit" class= "btn btn-success form-control mt-2" value="Agregar Perfil">
            
            </form>
        </div>
                                                         
        <div class="col-lg-6">
            <h4 class="text-white text-center">Perfiles Existentes</h4>
    <?php  
//---------------Listado de perfiles existentes---------------   
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";

}else{
    while($list_tipo= mysqli_fetch_array($resultado)){
        echo"<div class= 'btn btn-primary form-control mt-2'>
                $list_tipo[tipo_usuario]   
            </div>";
         
        }
}
//------------------------------------------------
?>    
        </div>
    </div>
    
</div>

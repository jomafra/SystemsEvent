<?php
include "registros/conec.php";

$consultas ="SELECT criticidad FROM criticidad ORDER BY criticidad";
$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 
//-------------------------------------------------------------------
?>
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
        
            <form action="registros/rcriticidad.php" method="post" class="">

                <h4 class="text-white text-center ">
                        Nuevo Nivel de Criticidad
                </h4>
                <input class=" text-white form-control mt-3" type="text" required name="cargo" placeholder="Nuevo nivel">

                <input type="submit" class= "btn btn-success form-control mt-2" value="Agregar Nivel">
            
            </form>
        </div>
                                                         
        <div class="col-lg-6">
            <h4 class="text-white text-center">Niveles Existentes</h4>
    <?php  
//--------------------------------------------
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";

}else{
    while($list_crit= mysqli_fetch_array($resultado)){
       echo"<div class= 'btn btn-primary form-control mt-2'>
                                $list_crit[criticidad]   
            </div>";
    }
}
//-----------------------------------------
?>                    
      </div>
    </div>
    
</div>
<?php
include "registros/conec.php";


$consultas ="SELECT cargo FROM cargos ORDER BY cargo";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 
//---------------------------------------------------------------
?>

   
<div  class="emergente">   
    <form action="registros/rcargos.php" method="post" class="formulario">

                <div class="titulo-form">
                    Ingreso de Cargos 
                </div>
                
               

                <div class="row">
                    <div class="medio1">
                      Nuevo Cargo

                    </div>
                    <div class="medio2">
                        <input type="text" name="cargo" placeholder=" Nueva Cargo">
                    </div>
                </div> 
                                <div class="row">
                        <div class="medio1">
                            
                        </div>

                        <div class="medio2">
                            
                        </div>
                    </div>
                <div class="row">
                        <div class="medio1">
                            Cargos Existentes
                        </div>

                        <div class="medio2">
                            <input type="submit" class=" botones" value="Agregar">
                        </div>
                    </div>

                <div class="">
                    <div class="medio1">
                        
                            <?php  
//---------------Listado de cargos existentes---------------   
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";

}else{
    while($list_car= mysqli_fetch_array($resultado)){
         echo"<div class='rowb'>
                <div class='medio1'>
                    $list_car[cargo]
                </div>
                    
                </div>";
        }
} 
//--------------------------------------------------------------
    ?>                  </div>
                        <div class="medio2">

                        </div>
                    </div>  
                    
           </form>
        </div>


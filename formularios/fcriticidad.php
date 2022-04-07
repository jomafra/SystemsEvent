<?php
include "registros/conec.php";

$consultas ="SELECT criticidad FROM criticidad ORDER BY criticidad";
$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 
//-------------------------------------------------------------------
?>
        
       <div  class="emergente">     

            <form action="registros/rcriticidad.php" method="post" class="formulario">



                <div class="titulo-form">
                   Niveles de Criticidad
                </div>

                

                <div class="row">
                    <div class="medio1">
                        Nuevo Nivel
                    </div>
                    <div class="medio2">
                        <input type="text" name="nivel" placeholder="Nuevo Nivel">
                    </div>
                </div>
                  <div class="row ">
                    <div class="medio1">
                        
                    </div>
                    <div class="medio2">
                       
                    </div>
                </div>
                 <div class="row ">
                    <div class="medio1">
                        Niveles Existentes
                    </div>
                    <div class="medio2">
                        <input type="submit" class=" botones" value="Agregar">
                    </div>
                </div>
                <div class="">
                    <div class="medio1">
    <?php  
//--------------------------------------------
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";

}else{
    while($list_crit= mysqli_fetch_array($resultado)){
       echo"<div class='row'>
                    <div class='medio1'>
                     $list_crit[criticidad]
                    </div>
                    
                </div>";
    }
}
//-------------------------------
?>                    
                    </div>
                    <div class="medio2">
                       
                    </div>
                </div>
                

               


            </form>

        </div>
               
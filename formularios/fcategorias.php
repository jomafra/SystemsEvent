<?php
include "registros/conec.php";

$consultas ="SELECT categoria FROM categorias ORDER BY categoria";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 

?>
   <div class="container">
    <div class="row">
        <div class="col-lg-6">
        
            <form action="registros/rcategorias.php" method="post" class="">

                <h4 class="text-white text-center ">
                        Ingreso de Categorias 
                </h4>
                <input class=" text-white form-control mt-3" type="text" required name="cargo" placeholder="Nueva Categoria">

                <input type="submit" class= "btn btn-success form-control mt-2" value="Agregar Categoria">
            
            </form>
        </div>
                                                         
        <div class="col-lg-6">
            <h4 class="text-white text-center">Categorias Existentes</h4>
                        <?php 
    //------------Listado de categorias existentes---  
                            if(!$resultado){
                                echo"--Error-- No se pudo consultar la tabla";
                            }else{
                                while($list_cat= mysqli_fetch_array($resultado)){
                                     echo"<div class= 'btn btn-primary form-control mt-2'>
                                $list_cat[categoria]   
            </div>";
                                }
                            }   
                        ?>
         </div>
    </div>
    
</div>
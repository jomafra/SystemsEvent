<?php
    include "registros/conec.php";


$consultas ="SELECT categoria FROM categorias ORDER BY categoria";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 

?>
    <form class="form-group" action="registros/rcategorias.php" method="post">
         
            <div class="form-group row">
                <div class ="row">
                    <h3 class="text-center">CATEGORIAS DE EQUIPOS</h3>
                </div>

                <div class="row">
                    <div class="col-lg-5 ">
                        <input class="form-control text-center" type="text" name="categ" require placeholder="NUEVA CATEGORIA">
                        <input class="form-control btn btn-primary" type="submit" class=" botones" value="Agregar">
                    </div>
                    </div class="col-lg-5">
                        <h5 class="text-center">EXISTENTES</h5>
                        <?php 
                                //--Listado de categorias existentes---  
                            if(!$resultado){
                                echo"--Error-- No se pudo consultar la tabla";
                            }else{
                                while($list_cat= mysqli_fetch_array($resultado)){
                                    echo"<h4>$list_cat[categoria]</h4>";
                                }
                            }   
                        ?>
                    </div>          
                </div>            
            </div>
               
    </form>
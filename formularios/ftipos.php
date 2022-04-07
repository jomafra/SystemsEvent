<?php
include "registros/conec.php";


$consultas ="SELECT id_tipo, tipo_usuario FROM tipos ORDER BY id_tipo";

$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion); 

?>  
<div  class="emergente">   
    <form action="registros/rtipos.php" method="post" class="formulario">

                <div class="titulo-form">
                    Perfiles de Usuario
                </div>
                <div class="row">
                    <div class="medio1">
                      Nuevo tipo 
                    </div>
                    <div class="medio2">
                        <input type="text" name="tipo_us" placeholder=" Tipo de Usuario">
                    </div>
                </div> 
               

                
                <div class="row">
                    <div class="medio1">
                     
                    </div>
                    <div class="medio2">
                        
                    </div>
                </div>
                

                <div class="row ">
                    <div class="medio1">
                        Tipos Existentes
                    </div>
                    <div class="medio2">
                        <input type="submit" class=" botones" value="Agregar">
                    </div>
                </div>
         <div class=" ">
                    <div class="medio1">
                        
<?php  
//---------------Listado de cargos existentes---------------   
if(!$resultado){
    echo"--Error-- No se pudo consultar la tabla";
}else{
    while($list_tipo= mysqli_fetch_array($resultado)){
         echo"<div class='rowb'>
                  <div class='medio1'>
                     $list_tipo[id_tipo] $list_tipo[tipo_usuario]
                  </div>
              </div>";
        }
}
?>

                    </div>
                    <div class="medio2">
                        
                    </div>
                </div>
           </form>
        </div>

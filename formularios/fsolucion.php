<?php
include "registros/conec.php";

$id_caso  = $_GET["updateid"];
   
$consultas="SELECT eventos.fecha,eventos.id_criticidad, eventos.descripcion, eventos.id_equipo,eventos.id_usuario, eventos.estado, criticidad.criticidad, equipos.serial, usuarios.nombres FROM eventos INNER JOIN criticidad ON eventos.id_criticidad = criticidad.id_criticidad INNER JOIN equipos ON eventos.id_equipo = equipos.id_equipo INNER JOIN usuarios ON eventos.id_usuario = usuarios.id_usuario WHERE id_caso = $id_caso";
                
$resultado = mysqli_query($coneccion,$consultas);
mysqli_close($coneccion);                
if(!$resultado){
    echo"--ERROR-- al Ejecutar la consulta";
}else{
    while($caso = mysqli_fetch_assoc($resultado)){
     
   
?>

<div class='emergente'>

    <form action="registros/rsolucion.php" method='post' class='formulario'>

                <div class='titulo-form'>
                Detalles Del 
                    <?php 
                        echo"Evento Numero: $id_caso"; 
                    ?> 
                    
                </div>

                <div class='row'>
                    <div class='medio1'>
                        Nivel de Criticidad
                    </div>
                    
                    <div class='medio2'>
                        <input type="text" name="nivel" readonly class="" value="
<?php
        echo "$caso[criticidad]";                       
?>                  
                        "> 
                    </div>
                </div>
        
        
                <div class='row'>
                    <div class='medio1'>
                        Serial del Equipo
                    </div>
                    <div class='medio2'>
                       <input name="idequipo" readonly class="" value="
<?php
        echo "$caso[serial]";                       
?>
                       "> 
                    </div>
                </div>
        
                <div class='row'>
                    <div class='medio1'>
                        <input type="text" hidden  name="id_caso" value="
                                 <?php echo $id_caso ;        ?>              
                        " >
                    </div>
                    <div class='medio2'>
                        <a href="equipos.php" class="aa">¡ Deseo registrar el Equipo!</a>
                    </div>
                </div>
        
                <div class='row'>
                    <div class='medio1'>
                        Usuario
                    </div>
                    <div class='medio2'>
                         <input type="text" readonly name="id_usuario" value="
<?php
                            echo "$caso[nombres]";                       
?>                       ">
                    
                    </div>
                </div>
                
                <div class='rowheig'>
                    <div class='medio1'>
                        Descripcion del caso
                    </div>
                    <div class='medio2'>
                        <div class="descrip">
                            <textarea name="desc"  maxlength="255"    cols="36" rows="7" readonly >
<?php
                                 echo "$caso[descripcion]";
    }
}                        
?>
                            </textarea>
                        </div>
                    </div>
                </div>
        
                <div class='rowheig'>
                    <div class='medio1'>
                        Descripcion de la solucion
                    </div>
                    <div class='medio2'>
                        <div class="descrip">
                            <textarea name="desc_sol"  maxlength="255"   cols="36" rows="7" >
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='medio1'>

                    </div>
                    <div class='medio2'>
                        <input type='submit' class='botones' value='Generar Atencion'>
                    </div>
                </div>


            </form>

        </div>
<?php
include "registros/conec.php";
?>
<div class="container">
    <div class="row">
    <h3 class="text-center text-white">NUEVO EVENTO</h3>
        
        <div class="col-lg-12 form-group">
            <form class="" action="registros/reventos.php" method="post">
                <label class="text-center text-white" for="">Seleccione Criticidad</label>
                <select class="form-control" name="nivel" id="" require>
                    <?php
                            //------------ <option value=1></option>------
                            $consultas ="SELECT * FROM criticidad ORDER BY id_criticidad ";
                            $resultado = mysqli_query($coneccion,$consultas);
                            if(!$resultado){
                                echo"--ERROR-- al Ejecutar la consulta";
                            }
                            while ($list_cri= mysqli_fetch_array($resultado)){
                                echo '<option value='.$list_cri['id_criticidad'].'>'.$list_cri['criticidad'].'</option>';
                            }
                        ?>
                </select>
                <label class="text-center text-white" for="">Seleccione su equipo</label>
                <select class="form-control mt-" name="idequipo" required>
                    <?php

                        $consultas ="SELECT id_equipo, serial FROM equipos ORDER BY serial";

                        $resultado = mysqli_query($coneccion,$consultas);

                        if(!$resultado){
                            echo"--ERROR-- al Ejecutar la consulta";
                        }

                        while($list_ser= mysqli_fetch_array($resultado)){
                            echo '<option value='.$list_ser['id_equipo'].'>'.$list_ser['serial'].'</option>';

                        }
                    ?>
                </select>
                
                    <a class="form-control btn btn-outline-warning text-white mt-1" href="equipos.php">Deseo Registrar El Equipo</a>
                
                <input hidden type='number' name='usuario' value=                    
                            <?php
                                $varsesion = $_SESSION['usuario'];
                                $consultas ="SELECT id_usuario, nombres FROM usuarios WHERE email = '$varsesion'";
                                $resultado = mysqli_query($coneccion,$consultas);
                                if(!$resultado){
                                    echo"--ERROR-- al Ejecutar la consulta";
                                }
                                while($list_id= mysqli_fetch_assoc($resultado)){
                                    echo  $list_id['id_usuario'] ;

                                }
                                mysqli_close($coneccion);
                            ?> 
                >
                <label class="text-center text-white" for="">Describa su caso</label>
                <textarea class="form-control mt-1" name="desc"  maxlength="255"  cols="36" rows="7" >Historia:
                </textarea>
                <input class="form-control btn btn-warning mt-1"  type="submit" value="GENERAR EVENTO">
            </form>
        </div>
        
    </div>
</div>
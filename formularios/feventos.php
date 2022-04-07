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
                <!--
                    <a class="form-control btn btn-outline-primary text-white mt-1" href="equipos.php">DESEO REGISTRAR EL EQUIPO</a>
                -->
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
                <textarea class="form-control mt-1" name="desc"  maxlength="255"  cols="36" rows="7" >Describe aqui tu evento, dispones de 255 caracteres, este campo es obligatorio.
                </textarea>
                <input class="form-control btn btn-primary mt-1"  type="submit" value="GENERAR EVENTO">
            </form>
        </div>
        
    </div>
</div>

<!--
<div  class='emergente'>
    <form action="registros/reventos.php" method='post' class='formulario'>
                <div class='titulo-form'>
                    Detalle De Eventos
                    <?php
                        //echo   date("Y/m/d");
                    ?>
                </div>
                <div class='row'>
                    <div class='medio1'>
                        Nivel de Criticidad
                    </div>
                    <div class='medio2'>
                 <select name="nivel" required>
                     <option ></option>
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
                    </div>
                </div>
                <div class='row'>
                    <div class='medio1'>
                        Serial del Equipo
                    </div>
                    <div class='medio2'>
                        <select name="idequipo" required>
                            <option ></option>
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
                    </div>
                </div>
                <div class='row'>
                    <div class='medio1'>
                    </div>
                    <div class='medio2'>
                        <a href="equipos.php" class="aa">¡ Deseo registrar el Equipo!</a>
                    </div>
                </div>
                <div class='row'>
                    <div class='medio1'>
                        
                    </div>
                    <div class='medio2'>
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
                    </div>
                </div>
                <div class='rowheig'>
                    <div class='medio1'>
                        Descripcion breve
                    </div>
                    <div class='medio2'>
                        <div class="descrip">
                            <textarea name="desc"  maxlength="255"  cols="36" rows="7" >Describe aqui tu evento, dispones de 255 caracteres, este campo es obligatorio.
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='medio1'>
                    </div>
                    <div class='medio2'>
                        <input type='submit' class='botones' value='GENERAR EVENTO'>
                    </div>
                </div>
    </form>
</div>
                            -->
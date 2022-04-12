<?php
include "registros/conec.php";

?>
<div class=" text-white">
    <form class="form-group" action="registros/rusuarios.php" method="post">

        <div class='row '>
            <div class="col-lg-12">
                <h3 class="text-center">REGISTRO  DE  USUARIOS</h3>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-4">
                <label for="">Nombres</label>
            </div>
            <div class=" col-lg-8">
                <input class="form-control" required type="text" name="nombres">
            </div>
        </div>


        <div class="row mt-1">
            <div class="col-lg-4">
                <label for="">Apellidos</label> 
            </div>
            <div class="col-lg-8">
                <input class="form-control" required type="text" name="apellidos">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-4">
                <label for="">Tipo de Documento</label> 
            </div>
            <div class="col-lg-8">
                <select class="form-control" required name="tipo_doc">
                        <option value="sin definir">Sin Definir
                        </option>
                        <option value="cedula nacional">Cédula Nacional</option>
                        <option value="cedula extrangeria">Cédula Extranjeria</option>
                        <option value="nit">NIT</option>
                        <option value="otro">Otro</option>
                </select>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-4">
                <label for="">Numero de Documento</label>
            </div>
            <div class="col-lg-8">
                <input class="form-control" required type="number" name="num_doc">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-4">
                    <label for="">Genero</label> 
            </div>
            <div class="col-lg-8">
                <select class="form-control" required name="sexo" id="">
                        <option value="sin definir">Sin Definir</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                </select>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-4">
                   <label for="">Perfil de Usuario</label> 
            </div>

            <div class="col-lg-8">
                    <select class="form-control" required name="perfil" >
                        <?php
                            $consultas ="SELECT * FROM tipos";
                            $resultado = mysqli_query($coneccion,$consultas);
                            if(!$resultado){
                                echo"No se pudo traer los perfiles de usuarios";
                            }
                            while ($list_tipos= mysqli_fetch_assoc($resultado)){
                                echo '<option value='.$list_tipos['id_tipo'].'>'.$list_tipos['tipo_usuario'].'</option>';
                            }
                        ?>
                    </select>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-lg-4">
                    <label for="">Cargo o Resposabilidad</label> 
            </div>
            <div class="col-lg-8">
                    <select class="form-control" required name="cargo" id="cargo">
                        <?php
                            $consultas ="SELECT * FROM cargos";
                            $resultado = mysqli_query($coneccion,$consultas);
                            if(!$resultado){
                                echo"No se pudo traer los cargos";}
                            while ($list_cargos= mysqli_fetch_array($resultado)){
                            echo '<option value='.$list_cargos['id_cargo'].'>'.$list_cargos['cargo'].'</option>';
                            }
                            mysqli_close($coneccion);
                        ?>
                     </select>
                
            </div>
        </div>

            <div class="row mt-1">
                <div class="col-lg-4">
                    <label for="">Telefono</label> 
                </div>
                <div class="col-lg-8">
                    <input class="form-control" required type="text" name="telefono" placeholder="Telefono de Contacto">
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-lg-4">
                    <label for="">Correo Electronico</label> 
                </div>
                <div class="col-lg-8">
                    <input class="form-control" required type="text" name="email">
                </div>
            </div>
            
            <div class="row mt-1">
                <div class="col-lg-4">
                    <label for="">Contraseña</label> 
                </div>
                <div class="col-lg-8">
                    <input class="form-control" required type="password" name="contrasena">
                </div>
            </div>
            <div class="">
                <input type="submit" class="form-control btn btn-success mt-1" value ="Registrar">
            </div>
           
    </form>
</div>
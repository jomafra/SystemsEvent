<?php
    include "registros/conec.php";
    //----------------------------
      
?>
<div class="emergente">
           
    <form  action="registros/rproveedores.php" class="formulario" method="post">

                <div class="titulo-form">
                    NUEVO PROVEEDOR
                </div>
                <div class="row">
                    <div class="medio1">
                        Nombre o Razon Social
                    </div>
                    <div class="medio2">
                        <input tipe="text" name="razsoc">
                    </div>
                </div>

                <div class="row ">
                    <div class="medio1">
                        Tipo Documento Proveedor
                    </div>
                    
                    <div class="medio2">
                        <select name="tipodoc" id="">
                            <option value="nit">Nit</option>
                            <option value="cedula nacional">Cedula Nacional</option>
                            <option value="cedula extrangeria">Cedula Extrangeria</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="row ">
                    <div class="medio1">
                        Numero de Documento
                    </div>
                    <div class="medio2">
                        <input type="text"name="numdoc">
                    </div>
                </div>



                <div class="row">
                    <div class="medio1">
                        Telefono
                    </div>
                    <div class="medio2">
                        <input type="int" name="tel">
                    </div>
                </div>
                <div class="row">
                    <div class="medio1">
                        Correo Electronico
                    </div>
                    <div class="medio2">
                        <input type="text" name="email">
                    </div>
                </div>

                <div class="row">
                    <div class="medio1">
                        Direccion
                    </div>
                    <div class="medio2">
                        <input type="text" name="dir">
                    </div>
                </div>

                <div class="row">
                    <div class="medio1">
                        Nombre Persona Contacto
                    </div>
                    <div class="medio2">
                        <input tipe="text" name="nombcont">
                    </div>
                </div>



                <div class="row ">
                    <div class="medio1">
                        Numero Telefono Contacto
                    </div>
                    <div class="medio2">
                        <input type="number" name="telcont">
                    </div>
                </div>

                <div class="row">
                    <div class="medio1"></div>


                    <div class="medio2">
                        <input class="botones" type="submit" value="Guardar">
                    </div>
                </div>

            </form>
        </div>

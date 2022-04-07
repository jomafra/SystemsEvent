<?php
    include "registros/conec.php";
    //----------------------------    
?>
<form class='form-group' action='registros/requipos.php' method='post' onsubmit=''>
<div class="container">
    <div class="form-group row">
        <h3 class="text-center text-white">INGRESO DE EQUIPOS</h3>
        <div class="col-lg-6">
            <label class="form-label text-white" for="">FECHA ACTUAL</label>
            <input  class="form-control" value="<?php echo  date("d/m/Y") ;?>" type="text" name="fecha">
            <label class="form-label text-white" for="">SERIAL EQUIPO</label>
            <input class="form-control" type="text" name="serial">
            <label class="form-label text-white" for="">CATEGORIA</label>
            <select class="form-control" name="" id="">
                <option value="1">Sin Categoria</option>
                <?php
                    $consultas ="SELECT * FROM categorias ORDER BY categoria";   
                    $resultado = mysqli_query($coneccion,$consultas);                
                    if(!$resultado){echo"--ERROR-- al Ejecutar la consulta";}
                    while($list_cat= mysqli_fetch_array($resultado)){
                    echo '<option value='.$list_cat['id_categoria'].'>'.$list_cat['categoria'].'</option>';} 
                    mysqli_close($coneccion);
                ?>
            </select>
            <a class="form-control btn btn-outline-warning text-white mt-1" href="categorias.php">No se encuentra la categoria!</a>
            <label class="form-label text-white" for="">UBICACION</label>
            <input class="form-control" type="text" name="lugar">
        </div> 
        <div class="col-lg-6">
        <label class="form-label text-white" for="">DESCRIPCION</label>
            <textarea class="form-control" name="desc"  cols="30" rows="12" placeholder="Ingresa las caracteristicas del equipo"></textarea>
        </div>
    </div>
    <div class="row">
    <input class="form-control btn btn-success mt-1" type="submit" name="" value="Guardar">
    </div>                                                
</div>
</form>                     

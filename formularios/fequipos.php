<?php
    include "registros/conec.php";   
?>
<div class="container">
    <div class="row">
        <h3 class="text-center text-white">INGRESO DE EQUIPOS</h3>
        
        <div class="col-lg-12 form-group">
            <form class="" action="registros/requipos.php" method="post">
                <label class="form-label text-white" for="">Fecha Actual</label>
                <input  class="form-control" value="<?php echo  date("d/m/Y") ;?>" type="text" name="fecha">

                <label class="form-label text-white" for="">Serial del Equipo</label>
                <input class="form-control" type="text" name="serial">

                <label class="form-label text-white" for="">Categoria del Equipo</label>
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

            <label class="form-label text-white" for="">Ubicación</label>
            <input class="form-control" type="text" name="lugar">

            <label class="form-label text-white" for="">Descripción</label>
            <textarea class="form-control" name="desc"  cols="30" rows="5" placeholder="Ingresa las caracteristicas del equipo"></textarea>
            
            <input class="form-control btn btn-success mt-1" type="submit" name="" value="Registrar Equipo">
            </form>
        </div>
    
    </div>
</div>        

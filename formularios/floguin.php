<div class="form-group">
    <header>
        <h1 class="text-center text-white">System's Event</h1>
    </header>
    <form class="" action="registros/rloguin.php" method="POST">
        <div class="form-floating mb-1">
            <input class="form-control" type="email" name="miemail" id="floatingInput" require placeholder="name@example.com">
            <label for="floatingInput">Correo Electronico</label>
        </div>
        <div class="form-floating mb-1">
            <input class="form-control" type="password" name="contrasena" id="floatingPassword" require placeholder="Ingrese su contraseña">
            <label for="floatingPassword">Contraseña</label>
        </div>
        <input class="form-control btn-primary mt-1" type="submit" name="enviar" id="" value="Iniciar Sesion">
        <div class="form-group text-center">
            <a class="form-control btn btn-outline-danger text-white mt-1" href="registros/rrecuperacion.php">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="text-center">
            <a class="form-control btn btn-outline-success text-white mt-1" type="button" href="usuarios.php">"Registrarse"</a>
        </div>
    </form>
</div>
    
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">System's Event</a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#"><?php echo $_SESSION['usuario'] ;?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href=""><?php echo date('d/m/Y') ;?></a>
        </li>         
      </ul>
      <form class="d-flex text-center"> 
            <?php
            if ($varsesion ==''){
                echo'<a class="btn btn-success" href="index.php">Login</a>';
            }else{    
                echo'<a class="btn btn-danger" href="cerrar_sesion.php">Cerrar Sesión</a>';
            }
                
            ?>
        
        
      </form>
    </div>
  </div>
</nav>
</header>
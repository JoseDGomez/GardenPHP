



  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Garden PHP </div>
      <div class="list-group list-group-flush">
        <a href="../controller/gettask.php" class="list-group-item list-group-item-action bg-light">Tareas</a>
        <?php if($_SESSION["tipo"]=="A"){?>
        <a href="../controller/movecreate.php" class="list-group-item list-group-item-action bg-light">Nueva tarea</a>
        <a href="../controller/userscontrol.php" class="list-group-item list-group-item-action bg-light">Usuarios</a>
        <?php } ?>
        <a href="../controller/profile.php?nombre=<?php echo $_SESSION["nombre"]?>" class="list-group-item list-group-item-action bg-light">Perfil</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Modificar datos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../controller/logout.php">Cerrar sesión</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        



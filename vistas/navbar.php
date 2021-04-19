<?php 
// define ('SITE_URL', 'dsd.test');

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="btn-group mr-3">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 2rem; color: white; transform: rotate(45deg);"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
</div>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo '/vistas/listado_empleados.php' ?>">Empleados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li>
    </ul>
    <!-- <form class="form-inline"> -->
      <p class="text-white p-0 m-0 mr-3"><?php echo($user->getUsuario($_SESSION['id_usuario']))['nombre']; ?></p>
      <a class="text-light font-weight-bold" href="">Cerrar Sesión</a>
    <!-- </form> -->
  </div>
</nav>
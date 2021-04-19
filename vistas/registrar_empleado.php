<?php 
include_once '../includes/user_session.php';
// include_once '../includes/conexion.php';
include_once '../includes/user.php';
$conexion = new Conexion();
$userSession = new UserSession();
$user = new User();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">
  <title>Registrar Empleados</title>
</head>
<body>
  <?php include_once 'navbar.php'; ?>

  <div class="container mt-3 mt-lg-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-center">Formulario de registro</h3>
      </div>
      <div class="col-12">
        <form method="POST" action="../includes/registra_empleado.php" accept-charset="UTF-8" name="registrar_empleado" id="registrar_empleado" role="form" class="was-validated form-horizontal prevent-double-submit" autocomplete="off" enctype="multipart/form-data">

          <div class="row">
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="primer_nombre">Primer Nombre</label>
                <input type="text" class="form-control is-invalid" name="primer_nombre" id="primer_nombre" required666 placeholder="Ej: 77665544">
              </div>          
            </div>
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="segundo_nombre">Segundo Nombre</label>
                <input type="text" class="form-control is-invalid" name="segundo_nombre" id="segundo_nombre" placeholder="Ej: 77665544">
              </div>          
            </div>
            
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="primer_apellido">Primer Apellido</label>
                <input type="text" class="form-control is-invalid" name="primer_apellido" id="primer_apellido" required666 placeholder="Ej: 77665544">
              </div>          
            </div> 

            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="segundo_apellido">Segundo Apellido</label>
                <input type="text" class="form-control is-invalid" name="segundo_apellido" id="segundo_apellido" placeholder="Ej: 77665544">
              </div>          
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <label class="custom-control" for="genero">Genero</label>
              <select class="form-control" name="genero" id="genero">
                <option value="" selected>Seleccione</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
              </select>
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="celular">Nro. Celular</label>
                <input type="text" class="form-control is-invalid" name="celular" id="celular" required666 placeholder="Ej: 77665544">
              </div>          
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="direccion">Dirección</label>
                <input type="text" class="form-control is-invalid" name="direccion" id="direccion" required666 placeholder="Ej: 77665544">
              </div>     
            </div>        
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="fotografia">Fotografía</label>
                <input type="file" class="form-control is-invalid" name="fotografia" id="fotografia" required666>
              </div>     
            </div>

            <div class="col-12">
              <div class="custom-control p-0 mb-3">
                <button class="btn btn-success" id="button-enviar">Registrar Empleado</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 mt-5">
        <p class="text-center text-dark font-weight-bold"><small>Copyright © 2021, Swania Guarachi Velasco</small></p>
      </div>
    </div>
    
  </div>
  <!-- <script type="text/javascript" src="../assets/jquery-3.6.0.js"></script> -->
  <!-- <script type="text/javascript" src="../assets/bootstrap-4.6/js/bootstrap.js"></script> -->
</body>
</html>
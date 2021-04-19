<?php 
include_once '../includes/user_session.php';
// include_once '../includes/conexion.php';
include_once '../includes/user.php';
$conexion = new Conexion();
$userSession = new UserSession();
$user = new User();

if (!isset($_GET['empleado'])) {
  header('location: listado_empleados.php');
}

$id = base64_decode(base64_decode(base64_decode(base64_decode($_GET['empleado']))));

$query = $conexion->connect()->prepare('SELECT * FROM empleados WHERE id = :id');
$query->execute(array('id' => $id));
$empleado = $query->fetch(); /*Devuelve una fila*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">
  <style type="text/css">
    .custom-file-label::after{content: 'Fotografia' !important;}
  </style>
  <title>Pedidos</title>
</head>
<body>
  <?php include_once 'navbar.php'; ?>

  <div class="container mt-3 mt-lg-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-center">Editar Empleado</h3>
      </div>
      <div class="col-12">
        <form class="was-validated mx-auto p-2 p-md-3 p-lg-4 border border-white shadow" action="../includes/edita_empleado.php" method="POST" accept-charset="UTF-8" name="editar_empleado" id="editar_empleado" role="form" autocomplete="off" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="primer_nombre">Primer Nombre</label>
                <input type="text" class="form-control is-invalid" name="primer_nombre" id="primer_nombre" value="<?php echo $empleado['primer_nombre'] ?>" required placeholder="Ej: Swania">
              </div>          
            </div>
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="segundo_nombre">Segundo Nombre</label>
                <input type="text" class="form-control is-invalid" name="segundo_nombre" id="segundo_nombre" <?php echo $empleado['segundo_nombre'] ?> placeholder="Ej: Betty">
              </div>          
            </div>
            
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="primer_apellido">Primer Apellido</label>
                <input type="text" class="form-control is-invalid" name="primer_apellido" id="primer_apellido" value="<?php echo $empleado['primer_apellido'] ?>" required placeholder="Ej: Guarachi">
              </div>          
            </div> 

            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="segundo_apellido">Segundo Apellido</label>
                <input type="text" class="form-control is-invalid" name="segundo_apellido" id="segundo_apellido" value="<?php echo $empleado['segundo_apellido'] ?>" placeholder="Ej: Velasco">
              </div>          
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <label class="custom-control" for="genero">Genero</label>
              <select class="form-control" name="genero" id="genero" required>
                <option value="">Seleccione</option>
                <option value="masculino" <?php if ($empleado['genero']=='masculino'){ echo "selected"; } ?>>Masculino</option>
                <option value="femenino" <?php if ($empleado['genero']=='femenino'){ echo "selected"; } ?>>Femenino</option>
              </select>
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="celular">Nro. Celular</label>
                <input type="text" class="form-control is-invalid" name="celular" id="celular" value="<?php echo $empleado['celular'] ?>" required placeholder="Ej: 77665544">
              </div>          
            </div>          
            <div class="col-12 col-md-6 mb-3">
              <div class="custom-control p-0 mb-3">
                <label class="custom-control" for="direccion">Dirección</label>
                <input type="text" class="form-control is-invalid" name="direccion" id="direccion" value="<?php echo $empleado['direccion'] ?>" placeholder="Ej: Achumani, Calle 17">
              </div>     
            </div>     
            <div class="col-12 col-md-6">
              <div class="custom-control p-0 mb-3">
                  <label class="custom-file" for="fotografia">Fotografía</label>
                <div class="card" style="width: 18rem;">
                  <img id="card-fotografia" class="img-thumbnail" src="../fotografia-empleado/normal/<?php echo $empleado['fotografia'] ?>" alt="">
                </div>
                <div class="custom-file mb-3">
                  <input type="file" name="fotografia" class="custom-file" id="fotografia" value="<?php echo $empleado['fotografia'] ?>">
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="custom-control p-0 mb-3">
                <input type="hidden" hidden readonly value="<?php echo base64_encode(base64_encode(base64_encode(base64_encode($empleado['id'])))) ?>" name="id_empleado" id="id_empleado" class="hidden text-hide">
                <input type="hidden" hidden readonly value="<?php echo $empleado['fotografia'] ?>" name="antigua_fotografia" id="antigua_fotografia" class="hidden text-hide">
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
  <script type="text/javascript" src="../assets/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="../assets/bootstrap-4.6/js/bootstrap.js"></script>
</body>
</html>
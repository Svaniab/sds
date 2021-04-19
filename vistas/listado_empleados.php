<?php
session_start();
include_once '../includes/user.php';

if (!isset($_SESSION['id_usuario'])) {
  header('location: ../index.php');
}

$conexion = new Conexion();
$user = new User();

$sql = 'SELECT * FROM empleados WHERE ';
$array = array();
$primer_nombre = NULL;
$primer_apellido = NULL;
$segundo_apellido = NULL;
$celular = NULL;
$genero = NULL;
if (!empty($_GET['genero'])&&(!empty($_GET['primer_nombre'])||!empty($_GET['primer_apellido'])||!empty($_GET['segundo_apellido'])||!empty($_GET['celular']))) {

  $primer_nombre = htmlentities(strip_tags(trim($_GET['primer_nombre'])));
  $primer_apellido = htmlentities(strip_tags(trim($_GET['primer_apellido'])));
  $segundo_apellido = htmlentities(strip_tags(trim($_GET['segundo_apellido'])));
  $celular = htmlentities(strip_tags(trim($_GET['celular'])));
  $genero = htmlentities(strip_tags(trim($_GET['genero'])));

  if ($primer_nombre) {
    $sql .= " primer_nombre = :primer_nombre AND ";
    $array['primer_nombre'] = $primer_nombre;
  }
  if ($primer_apellido) {
    $sql .= " primer_apellido = :primer_apellido AND ";
    $array['primer_apellido'] = $primer_apellido;
  }
  if ($segundo_apellido) {
    $sql .= " segundo_apellido = :segundo_apellido AND ";
    $array['segundo_apellido'] = $segundo_apellido;
  }
  if ($celular) {
    $sql .= " celular = :celular AND ";
    $array['celular'] = $celular;
  }
  if ($genero) {
    $sql .= " genero = :genero AND ";
    $array['genero'] = strtolower($genero);
  }
  $sql .= " 1 = 1 ORDER BY primer_nombre, primer_apellido";

}elseif(!empty($_GET['primer_nombre'])||!empty($_GET['primer_apellido'])||!empty($_GET['segundo_apellido'])||!empty($_GET['celular'])){
  
  $primer_nombre = htmlentities(strip_tags(trim($_GET['primer_nombre'])));
  $primer_apellido = htmlentities(strip_tags(trim($_GET['primer_apellido'])));
  $segundo_apellido = htmlentities(strip_tags(trim($_GET['segundo_apellido'])));
  $celular = htmlentities(strip_tags(trim($_GET['celular'])));

  if ($primer_nombre) {
    $sql .= " primer_nombre = :primer_nombre AND ";
    $array['primer_nombre'] = $primer_nombre;
  }
  if ($primer_apellido) {
    $sql .= " primer_apellido = :primer_apellido AND ";
    $array['primer_apellido'] = $primer_apellido;
  }
  if ($segundo_apellido) {
    $sql .= " segundo_apellido = :segundo_apellido AND ";
    $array['segundo_apellido'] = $segundo_apellido;
  }
  if ($celular) {
    $sql .= " celular = :celular AND ";
    $array['celular'] = $celular;
  }
  $sql .= " 1 = 1 ORDER BY primer_nombre, primer_apellido";
}elseif (!empty($_GET)) {
  $sql .= " 1 = 1 ORDER BY id DESC, primer_nombre, primer_apellido";
  $error = 'Por favor seleccione otro campo más, para la busqueda.';
}else{
  $sql .= " 1 = 1 ORDER BY id DESC LIMIT 10";
  $error = 'Ingrese los valores a buscar';
}
$query = $conexion->connect()->prepare($sql);
$query->execute($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/icono.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="../assets/icono.ico">
  <link rel="stylesheet" href="../assets/bootstrap-4.6/css/bootstrap.css">
  <title>Listado de Empleados</title>
</head>
<body>
  <?php include_once 'navbar.php'; ?>
  <div class="container mt-3 mt-lg-5">
    <div class="row">
      <div class="col-12">
        <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" accept-charset="UTF-8" name="login" id="form-buscar" role="form" class="form-horizontal prevent-double-submit was-validated" autocomplete="off">

          <?php if (isset($error)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo $error; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>

          <div class="row">
            <div class="col-12">
              <p class="font-weight-bold">Criterios de la consulta</p>
            </div>
            <div class="col-12 col-lg-6">
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="min-width: 150px;">Primer nombre</div>
                </div>
                <input type="hidden" class="hidden-print hidden" name="_token" hidden readonly value="<?php echo bin2hex(random_bytes(128)) ?>">
                <input type="text" class="form-control input-text" name="primer_nombre" id="primer_nombre" value="<?php echo $primer_nombre ?>" placeholder="Ej: Swania">
              </div>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="min-width: 150px;">Primer apellido</div>
                </div>
                <input type="text" class="form-control input-text" name="primer_apellido" id="primer_apellido" value="<?php echo $primer_apellido ?>" placeholder="Ej: Guarachi">
              </div>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="min-width: 150px;">Segundo apellido</div>
                </div>
                <input type="text" class="form-control input-text" name="segundo_apellido" id="segundo_apellido" value="<?php echo $segundo_apellido ?>" placeholder="Ej: Velasco">
              </div>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="min-width: 150px;">Genero</div>
                </div>
                <select class="custom-select form-control" name="genero" id="genero">
                  <option value="" selected>Seleccione</option>
                  <option value="masculino" <?php echo ($genero=='masculino')? 'selected':'' ?> >Masculino</option>
                  <option value="femenino" <?php echo ($genero=='femenino')? 'selected':'' ?> >Femenino</option>
                </select>
              </div>

              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="min-width: 150px;">Nro. Celular</div>
                </div>
                <input type="text" class="form-control input-text" name="celular" id="celular" value="<?php echo $celular ?>" placeholder="Ej: 79551771">
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="input-group is-invalid">
                <a href="registrar_empleado.php" class="btn btn-primary">Registrar Empleado</a>
                <input type="hidden" class="hidden-print hidden" name="token" hidden readonly value="<?php echo bin2hex(random_bytes(128)) ?>">
              </div>
              <div class="input-group is-invalid mb-2" style="bottom: 0!important; position: absolute;">
                <button class="btn btn-success" type="submit">Ejecutar consulta</button>
                <button type="button" class="btn btn-outline-info ml-2" onclick="limpiarFormulario();" title="Limpiar formulario">Limpiar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-12">
        <h4 class="text-dark text-center my-3">Resultados de ejecutar la consulta</h4>
      </div>
      <div class="col-12 col-lg-10 mx-auto">
        <table class="table table-bordered table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Género</th>
              <th scope="col">Nro. Celular</th>
              <th scope="col">Dirección</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($query as $i=>$fila) { ?>
              <tr>
                <td><?php echo ($i+1) ?></td>
                <td><?php echo $fila['primer_nombre'].' '.$fila['segundo_nombre'] ?></td>
                <td><?php echo $fila['primer_apellido'].' '.$fila['segundo_apellido'] ?></td>
                <td><?php echo ucfirst($fila['genero']) ?></td>
                <td><?php echo $fila['celular'] ?></td>
                <td><?php echo $fila['direccion'] ?></td>
                <td>
                  <a href="editar_empleado.php?empleado=<?php echo base64_encode(base64_encode(base64_encode(base64_encode($fila['id'])))) ?>" class="btn btn-outline-primary">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil-alt" class="svg-inline--fa fa-pencil-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20"><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg>
                  </a>
                </td>
                <td><button class="btn btn-outline-danger">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20"><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg>
                </button></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../assets/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="../assets/bootstrap-4.6/js/bootstrap.js"></script>
  <script type="text/javascript">
    function limpiarFormulario() {
      $("#form-buscar").find('.form-control').val('');
    }
  </script>
</body>
</html>

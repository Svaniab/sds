<?php
if (strtolower($_SERVER['REQUEST_URI']) == '/vistas/login.php') {
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/icono.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="../assets/icono.ico">
  <link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">
  <title>Login</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <div class="container">
    <div class="row py-lg-5 py-3">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="card shadow">
          <h5 class="card-header text-center">Iniciar Sesión</h5>
          <div class="card-body">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" accept-charset="UTF-8" name="login" id="form-login" role="form" class="form-horizontal prevent-double-submit was-validated" autocomplete="off">
              <?php if (isset($error)) { ?>
                <div class="alert alert-danger text-center"><?php echo $error; ?></div>
              <?php } ?>
              <div class="custom-control mb-3 p-0">
                <label class="" for="usuario">Usuario</label>
                <input type="text" class=" form-control" name="usuario" id="usuario" value="<?php echo ((isset($_POST['usuario'])) ? $_POST['usuario'] : NULL) ?>" required placeholder="Usuario">
              </div>
              <div class="custom-control mb-3 p-0">
                <label class="" for="password">Contraseña</label>
                <input type="password" class=" form-control" name="password" id="password" value="<?php echo ((isset($_POST['password'])) ? $_POST['password'] : NULL) ?>" required placeholder="********">
              </div>
              <div class="custom-control mb-3 p-0">
                <div class="g-recaptcha" data-sitekey="6Lc1_6waAAAAACn6VTc-e4BPLfgSROG4UQjIFuQv"></div>
              </div>

              <div class="input-group is-invalid">
               <button class="btn btn-success w-100" type="submit">Iniciar sesion</button>
             </div>

           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>
</html>
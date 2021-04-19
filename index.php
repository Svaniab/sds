<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$usuarioSession = new UserSession();
$user = new User();
$secret = '6Lc1_6waAAAAALhbQd6pxgyFQpx6lKUs8u8UARrn';

if(isset($_SESSION['id_usuario'])){
    $user->setUser($usuarioSession->getCurrentUser());
    // include_once 'vistas/listado_empleados.php';
    header("location: vistas/listado_empleados.php");

}else if(isset($_POST['usuario']) && isset($_POST['password'])){

    $usuario = htmlentities(htmlspecialchars($_POST['usuario']));
    $password = htmlentities(htmlspecialchars($_POST['password']));
    $recaptcha = $_POST['g-recaptcha-response'];
    if ($recaptcha) {
        $recaptcha_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
        $response = json_decode($recaptcha_response, true);
        if ($response["success"]) {
            $user = new User();
            $id_usuario = $user->validar($usuario, $password);
            if($id_usuario!=false){
                $usuarioSession->crearSession($id_usuario);
                $user->setUser($id_usuario);

                header("location: vistas/listado_empleados.php");
            }else{
                $error = "Nombre de usuario y/o password incorrecto";
            }
        }else{
            $error = "No se pudo verificar el captcha, actualice la página e intente nuevamente.";
        }
    }else{
        $error = "Por favor verifique el captcha";
    }
    include_once 'vistas/login.php';
}else{
    include_once 'vistas/login.php';
}

?>
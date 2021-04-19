<?php
session_start();

include_once '../includes/user_session.php';
// include_once '../includes/conexion.php';
include_once '../includes/user.php';
$conexion = new Conexion();

    $primer_nombre = htmlentities(strip_tags(trim($_POST['primer_nombre'])));
    $segundo_nombre = htmlentities(strip_tags(trim($_POST['segundo_nombre'])));
    $primer_apellido = htmlentities(strip_tags(trim($_POST['primer_apellido'])));
    $segundo_apellido = htmlentities(strip_tags(trim($_POST['segundo_apellido'])));
    $genero = htmlentities(strip_tags(trim($_POST['genero'])));
    $celular = htmlentities(strip_tags(trim($_POST['celular'])));
    $direccion = htmlentities(strip_tags(trim($_POST['direccion'])));
    $fotografia = NULL;

    if (isset($_FILES['fotografia'])) {

        $nombre_fotografia = $_FILES['fotografia']['name'];
        $extension = pathinfo($nombre_fotografia, PATHINFO_EXTENSION);
        $ruta_temporal = $_FILES['fotografia']['tmp_name'];
        $nuevo_nombre =  "empleado_". bin2hex(random_bytes(8)) . date('Ymd_His') . '.'.$extension;
        $ruta_destino = "../fotografia-empleado/normal/$nuevo_nombre";

        if (move_uploaded_file($ruta_temporal, $ruta_destino)){
            $fotografia = $nuevo_nombre;
            // $sql = "INSERT INTO 'bd'(nombre,ruta) VALUES ('$nombreImg','$destino')";
            // $res = mysqli_query($cn, $sql);
            // if ($res) {
                // echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';
            // } else {
                // die("Error" . mysqli_error($cn));
            // }
            echo "<hr>SIIIIIII<hr>";
        }else{
            echo "NOOOOOOOOO";
        }
    }
    
    $query = $conexion->connect()->prepare('INSERT INTO empleados(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, genero, celular, direccion, fotografia) VALUES(:primer_nombre, :segundo_nombre, :primer_apellido, :segundo_apellido, :genero, :celular, :direccion, :fotografia)');
    $query->execute(
        [
            ':primer_nombre' => $primer_nombre,
            ':segundo_nombre' => $segundo_nombre,
            ':primer_apellido' => $primer_apellido,
            ':segundo_apellido' => $segundo_apellido,
            ':genero' => $genero,
            ':celular' => $celular,
            ':direccion' => $direccion,
            ':fotografia' => $fotografia,
        ]
    );

    // header('location: ../vistas/listado_empleados.php');

?>
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
    $fotografia = htmlentities(strip_tags(trim($_POST['antigua_fotografia'])));
    $id = base64_decode(base64_decode(base64_decode(base64_decode(($_POST['id_empleado'])))));

// print_r($_FILES);
// echo "<hr>";
// echo $_FILES['fotografia']['name'];

    if (isset($_FILES['fotografia'])) {
        if (isset($_FILES['fotografia']['name'])) {
            $nombre_fotografia = $_FILES['fotografia']['name'];
            $extension = pathinfo($nombre_fotografia, PATHINFO_EXTENSION);
            $ruta_temporal = $_FILES['fotografia']['tmp_name'];
            $nuevo_nombre =  "empleado_". bin2hex(random_bytes(8)) . date('Ymd_His') . '.'.$extension;
            $ruta_destino = "../fotografia-empleado/normal/$nuevo_nombre";

            if (move_uploaded_file($ruta_temporal, $ruta_destino)){
                $fotografia = $nuevo_nombre;
            }else{
                echo "NOOOOOOOOO";
            }
        }
    }
    
    $query = $conexion->connect()->prepare('UPDATE empleados SET primer_nombre = :primer_nombre, segundo_nombre = :segundo_nombre, primer_apellido = :primer_apellido, segundo_apellido = :segundo_apellido, genero = :genero, celular = :celular, direccion = :direccion, fotografia = :fotografia WHERE id = :id');
    $query->execute(
        array(
            ':primer_nombre' => $primer_nombre,
            ':segundo_nombre' => $segundo_nombre,
            ':primer_apellido' => $primer_apellido,
            ':segundo_apellido' => $segundo_apellido,
            ':genero' => $genero,
            ':celular' => $celular,
            ':direccion' => $direccion,
            ':fotografia' => $fotografia,
            ':id' => $id,
        )
    );

    header('location: ../vistas/editar_empleado.php?empleado='.base64_encode(base64_encode(base64_encode(base64_encode($id)))));

?>
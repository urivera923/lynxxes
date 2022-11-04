<?php session_start();

    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $nombre_usuario = $_SESSION['usuario'];
    $obj = new metodosPadre();
    $sql = "SELECT id_usuario FROM usuarios WHERE nombre='$nombre_usuario'";
    $id=$obj->idUsuario($sql);
    

    $id_usuario= $id[0]['id_usuario'];
    // print_r($id_usuario);
    $video = addslashes(file_get_contents($_FILES['txtvideo']['tmp_name']));
    $descripcion = $_POST['txtdescripcion'];
    $fecha = $_POST['txtfecha'];

    $datos = array(
        $video, 
        $descripcion,
        $fecha,
        $id_usuario
    );

    // print_r($datos);


    if ($obj->insertarDatosVideo($datos) == 1) {
        header("location:../index_videos.php");
    } else {
        echo "Fallo al agregar";
    }

?>

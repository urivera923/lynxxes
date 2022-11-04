<?php session_start();

    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $nombre_usuario = $_SESSION['usuario'];
    $obj = new metodosPadre();
    $sql = "SELECT id_usuario FROM usuarios WHERE nombre='$nombre_usuario'";
    $id=$obj->idUsuario($sql);
    
    

    $id_usuario= $id[0]['id_usuario'];
    $desc = $_POST['txtDescripcion'];
    $fech = $_POST['txtFecha'];

    $id = $_POST['id'];

    $datos = array(
        $desc,
        $fech,
        $id,
        $id_usuario
    );

    print_r($datos);

    if ($obj->actualizarDatosVideo($datos) == 1) {
        header("location:../index_videos.php");
    } else {
        echo "Fallo al actualizar";
    }

?> 
<?php session_start();

    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $nombre_usuario = $_SESSION['usuario'];
    $obj = new metodosPadre();
    $sql = "SELECT id_usuario FROM usuarios WHERE usuario='$nombre_usuario'";
    $id=$obj->idUsuario($sql);
    
    

    $id_usuario= $id[0]['id'];
    print_r($id_usuario);
    $cantidad = $_POST['txtcantidad'];
    print_r($cantidad);
    $concepto = $_POST['txtconcepto'];
    print_r($concepto);
    $fecha = $_POST['txtfecha'];
    print_r($fecha);
    $id = $_POST['id'];
    print_r($id);

    $datos = array(
        $cantidad, 
        $concepto,
        $fecha,
        $id,
        $id_usuario
    );

    print_r($datos);

    if ($obj->actualizarDatos($datos) == 1) {
        header("location:../index.php");
    } else {
        echo "Fallo al actualizar";
    }

?> 
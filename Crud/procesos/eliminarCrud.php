<?php 
    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $id = $_GET['id'];

    $obj = new metodosPadre();
    if ($obj->eliminarDatos($id) == 1) {
        header("location:../../Crud/index.php");
    } else {
        echo "Fallo al eliminar";
    }
?>
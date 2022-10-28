<?php
    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $user = $_POST['txtUsuario'];
    $pass = $_POST['txtPassword'];
    $rol = $_POST['txtRol'];

    $pass = sha1($pass);

    $datos = array(
        $user,
        $pass,
        $rol
    );
    print_r($datos);
    $obj = new metodosPadre();
    if ($obj->registroUsuario($datos)==1) {
        header("location:../index.php");
    } else {
        echo "Fallo al agregar";
    }

?>
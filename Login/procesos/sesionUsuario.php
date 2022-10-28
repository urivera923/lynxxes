<?php session_start();

    require_once "../../app/conexion.php";
    require_once "../../app/metodos.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $_SESSION['usuario'] = $usuario;
    $password = sha1($password);


    $obj = new metodosPadre();
    if ($obj->iniciarSesion($usuario, $password) == 1) {
        header("location: ../index.php");
    } else {
        echo "Fallo al iniciar sesión";
    }

?>
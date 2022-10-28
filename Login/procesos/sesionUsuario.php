<?php session_start();

require_once "../../app/conexion.php";
require_once "../../app/metodos.php";

$usuario = $_POST['usuario'];
// print_r( $usuario);
$password = sha1($_POST['password']);
// print_r($password);
$_SESSION['usuario'] = $usuario;


$obj = new metodosPadre();
    if ($obj->iniciarSesion($usuario, $password) == 1) {
        header("location: ../index.php");
    } else {
        echo "Fallo al iniciar sesión";
    }


// $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$password'";
// $respuesta = mysqli_query($conexion, $sql);

// $filas = mysqli_fetch_array($respuesta);


// if ($filas['rol_id'] == 0) {

//     header('location:../../Crud/indexAdmin.php');
// } else if ($filas['rol_id'] > 0) {

//     header('location:../../Crud/index.php');
// } else {
//     header('location:../../Login/error.php');
// }

// mysqli_free_result($respuesta);
// mysqli_close($conexion);

    // $datos = array(
    //     $usuario, 
    //     $password,
    //     $rol
    // );
    
    // print_r($datos);
 
    // $obj = new metodosPadre();
    // if ($obj->iniciarSesion($datos)==1) {
    //     header("location:./Crud/index.php");
    // } else {
    //     header("Fallo al agregar");
    // }
    // $c = new Conectar();
    // $conexion = $c->conexion();

    // $sql = "SELECT * FROM usuarios
    // WHERE nombre = '$usuario'
    // AND password = '$password'";

    // $respuesta = mysqli_query($conexion, $sql);

    // $filas = mysqli_num_rows($respuesta);

    
    // if ($filas['rol_id'] == 1) {
   
    //     header('location:../../Crud/indexAdmin.php');
    // } else if($filas['rol_id'] == 2){

    //     header('location:../../Crud/index.php');

    // }  else {
    //     header('location:../../Login/error.php');
    // }

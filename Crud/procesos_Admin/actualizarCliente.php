<?php
require_once "../../app/conexion.php";

$obj = new Conectar();

if (!empty($_POST)) {
    $alert = '';
    if (empty($_POST['nombre'])) {
        $alert = '<div class="alert alert-danger" role="alert"><p>Debes de poner un Nombre</p></div>';
    } else {
        $obj = new Conectar();
        $idUsuario = $_POST['id'];
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $sql_nombre = mysqli_query($obj->conexion(), "SELECT * FROM usuarios WHERE (nombre = '$nombre' AND id_usuario != $idUsuario)");
        $result_nombre = mysqli_fetch_array($sql_nombre);
        if ($result_nombre > 0) {
            $alert = '<div class="alert alert-danger" role="alert"><p>Este NOMBRE ya EXISTE escriba OTRO</p></div>';
        } else {
            if (empty($_POST['pass'])) {
                $sql_update = mysqli_query($obj->conexion(), "UPDATE usuarios SET nombre = '$nombre' WHERE id_usuario = $idUsuario");
            } else {
                $sql_update = mysqli_query($obj->conexion(), "UPDATE usuarios SET nombre = '$nombre' , password = '$pass' WHERE id_usuario = $idUsuario");
            }
            if ($sql_update) {
                $alert = '<div class="alert alert-success" role="alert"><p>Cliente actualizado correctamente.</p></div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert"><p>Error al actualizar Cliente</p></div>';
            }
        }
    }
    mysqli_close($obj->conexion());
}
    if (empty($_GET['id'])) {
        header('location: index.php');
        mysqli_close($obj->conexion());
    }
    $idUsuario = $_GET['id'];
    $sql = mysqli_query($obj->conexion(), "SELECT * FROM usuarios WHERE id_usuario = $idUsuario;");
    mysqli_close($obj->conexion());
    $result_sql = mysqli_num_rows($sql);
    if ($result_sql == 0) {
        header('location: index.php');
        mysqli_close($obj->conexion());
    } else {
        while ($datos = mysqli_fetch_array($sql)) {
            $idUsuario = $datos['id_usuario'];
            $nombre = $datos['nombre'];
            $pass = $datos['password'];
        }
    }



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Actualizar datos del cliente</title>
</head>

<body class="cliente-update">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card my-5 mx-5 shadow border">
                    <div class="card-header text-white bg-dark">
                        <div class="text-center">
                            <h2>Editar Usuario</h2>
                        </div>
                        <div class="text-center">
                            <?php echo isset($alert) ? $alert : ''; ?>
                        </div>
                    </div>
                    <div class="card-body px-4">
                        <form action="#" method="POST">
                            <input type="hidden" name="id" value="<?php echo $idUsuario ?>">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del usuario" value="<?php echo $nombre ?>">
                                <label for="nombre">Nombre:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña del usuario">
                                <label for="nombre">Password:</label>
                            </div>
                            <a class="btn btn-danger my-2 ms-2" href="../indexAdmin.php"><i class="fa-solid fa-arrow-rotate-left"></i> Regresar</a>
                            <button class="btn btn-warning text-white my-2 ms-2"><i class="fa-solid fa-pen-to-square mx-2"></i>Actualizar datos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
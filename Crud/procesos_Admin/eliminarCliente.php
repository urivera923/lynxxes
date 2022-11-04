<?php

    require_once "../../app/conexion.php";
    $obj = new Conectar();

    if(!empty($_POST)){
        if(empty($_POST['id'])){
            header("location: index.php");
            mysqli_close($obj->conexion());
        }
        $idUsuario = $_POST['id'];
        $query_delete = mysqli_query($obj->conexion(), "DELETE FROM usuarios WHERE id_usuario = $idUsuario");
        mysqli_close($obj->conexion());
        if ($query_delete) {
            header("location: ../indexAdmin.php");
        } else {
            echo "Error al ELIMINAR";
        }
    }

    // ? Mostrar Datos
    if(empty($_GET['id'])){
        header('location: ../indexAdmin.php');
        mysqli_close($obj->conexion());
    }
    $idUsuario = $_GET['id'];
    $sql = mysqli_query($obj->conexion(), "SELECT * FROM usuarios WHERE id_usuario = $idUsuario;");
    mysqli_close($obj->conexion());
    $result_sql = mysqli_num_rows($sql);

    if($result_sql == 0){
        header('location: ../indexAdmin.php');
        mysqli_close($obj->conexion());
    }else{
        while($datos = mysqli_fetch_array($sql)){
            $idUsuario = $datos['id_usuario'];
            $nombre = $datos['nombre'];
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
    <title>Eliminar clientes</title>
</head>
<body class="cliente-update">
   
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card my-5 mx-5 shadow border">
                    <div class="card-headertext-white bg-dark">
                        <div class="text-center">
                            <h2 class="text-white">Elimar Cliente</h2>
                        </div>
                        <div class="text-center">
                            <?php echo isset($alert) ? $alert : ''; ?>
                        </div>
                    </div>
                    <div class="card-body px-4">
                        <form action="#" method="POST">
                            <input type="hidden" name="id" value="<?php echo $idUsuario ?>">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del usuario" value="<?php echo $nombre ?>" disabled>
                                <label for="nombre">Nombre:</label>
                            </div>
                            <a class="btn btn-info text-white" href="../indexAdmin.php"><i class="fa-solid fa-arrow-rotate-left"></i> Regresar</a>
                            <button class="btn btn-danger text-white my-2 ms-2"><i class="fa-solid fa-pen-to-square mx-2"></i>Eliminar Cliente</button>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
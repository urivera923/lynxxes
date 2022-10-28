<?php session_start();
    require_once "../app/conexion.php";
    require_once "../app/metodos.php";
    if (isset($_SESSION['usuario'])) {
        $nombre_usuario = $_SESSION['usuario'];
    

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>
        Inicio
    </title>
</head>

<body class="fondo">
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <nav class="navbar navbar-dark bg-dark d-none d-lg-block">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="../assets/img/logo4.png" alt="" width="45" height="40" class="d-inline-block align-text-top">
                            Bootstrap
                        </a>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-white ms-4 mt-3"> Bienvienido <span class="fw-bolder"><?php echo $_SESSION['usuario']; ?></span></p>
                            <button class="btn btn-outline-danger ms-4"><a href="../Login/procesos/salirUsuario.php" class="text-decoration-none text-light">Cerrar Sesión</a></button>
                        </div>

                    </div>
                </nav>

                 <div class="card my-5 mx-5 shadow border">
                    <div class="card-header text-white bg-dark">
                        <div class="text-center fw-bold">Formulario</div>
                    </div>
                    <div class="card-body">
                        <form action="../crud/procesos/insertarCrud.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" name="txtcantidad" placeholder="Nombre del dispositivo" required>
                                <label for="floatingInput"><i class="fa-solid fa-bars me-2"></i>Categoría</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Selecciona un archivo</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div> 


                <div class="card border shadow mb-5 mx-5">
                    <div class="card-header text-white bg-dark text-center">
                        <div class=" fw-bold">Información</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Concepto o Categoria</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Actualizar</th>
                                        <th scope="col">Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="text-center">

                                        <td>s</td>
                                        <td>s</td>
                                        <td>s</td>
                                        <td>s</td>

                                        <td><span class="btn btn-warning text-white"><a class="text-white text-decoration-none" href="editar.php?id=<?php echo $key['id_gasto']; ?>"><i class="fa-solid fa-pen-to-square mx-2"></i>Editar</a></span></td>
                                        <td><span class="btn btn-danger text-white"><a class="text-white text-decoration-none" href="./procesos/eliminarCrud.php?id=<?php echo $key['id_gasto']; ?>"><i class="fa-solid fa-trash-can mx-2"></i>Eliminar</a></span></td>

                                    </tr>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>

<?php 
    } else {
        header("location:../Login/index.php");
    }
?>
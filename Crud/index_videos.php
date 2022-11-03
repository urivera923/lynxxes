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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio</title>
</head>

<body class="background-cliente">

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container-sm">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre nosotros</h4>
                        <p class="text-muted">LynXXXes una página web de alojamiento de fotos pornográficas. LynXXXes fue fundada en CDMX en 2022 por los propietarios Mexicanos La cosita fea y La cosita más fea. El sitio web mexicano ahora está registrado a nombre de la empresa checa XZUNUN.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contactanos</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white"><i class="fa-brands fa-twitter me-2"></i> Follow on Twitter </a></li>
                            <li><a href="#" class="text-white"><i class="fa-brands fa-facebook-f me-2"></i>Fallow on Facebook</a></li>
                            <li><a href="#" class="text-white"><i class="fa-solid fa-paper-plane me-2"></i>Email me</a></li>
                        </ul>
                        <button class="btn btn-outline-danger ms-4"><a href="../Login/procesos/salirUsuario.php" class="text-decoration-none text-light">Cerrar Sesión</a></button>

                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong class="me-2">Videos</strong>
                    
                </a>
                <a href="./index.php" class="navbar-brand d-flex align-items-start"><strong>Album</strong></a>
                
                <div class="d-flex align-items-center justify-content-between">
                            <p class="text-white ms-4 mt-3">¡Hola! <span class="fw-bolder"><?php echo $_SESSION['usuario']?></span></p>
                        </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <section class="py-4 text-center container">
            <div class="row py-lg-4">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h3 class="fw-bold text-white">Videos</h3>
                    <p class=" text-white">¡Hola! <span class="fw-bolder"><?php echo $_SESSION['usuario']?></span> Puedes escribir algo breve y principal sobre tu colección como se muestra a continuación: su contenido, el creador, etc. Hágalo breve y atractivo, pero no demasiado breve para que la gente no se lo salte por completo.</p>
                    <p>
                        <div class="card shadow border p-4">
                            <div class="mb-3">
                                <form action="frmArchivos">
                                    <label for="formFile" class="form-label">Seleccina la foto a subir</label>
                                    <input class="form-control" type="file" id="formFile" name="archivos[]" multiple="multiple">
                                </form>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar</button>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php 
                                $obj = new metodosPadre();
                                $sql_consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre_usuario'";
                                $id = $obj->idUsuario($sql_consulta);
                                $id_usuario = $id[0]['id_usuario'];
                                
                                $sql = "SELECT video, descripcion, fecha FROM t_videos WHERE rol_id = '2'";
                                // print_r($sql);
                                $datos = $obj->monstarDatos($sql);

                                foreach ($datos as $key ) {
                                    
                            
                            ?>
                            <!-- <img src="data:image/jpg;base64, <?php echo base64_encode($key['imagen'])?>" width="50%" height="50%" class="card-img-top" alt="..."> -->
                            <video src="data:video/mp4;base64,  <?php echo base64_encode($key['video'])?>" autoplay controls></video>
                            <div class="card-body">
                                <h5 class="card-title">Descripción</h5>
                                <p class="card-text"><?php echo $key['descripcion']?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-warning mx-2">Editar</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger mx-2">Eliminar</button>
                                    </div>
                                    <small class="text-muted"><?php echo $key['fecha']?></P></small>
                                </div>
                             
                            </div>

                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#" class="btn btn-info">Back to top</a>
            </p>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php 
  } else {
    header("location:../Login/index.php");
  }
?>
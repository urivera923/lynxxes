<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets//css//style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <title>Iniciar Sesión</title>
</head>

<body class="background-radial-gradient overflow-hidden">
  <section>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">

          <!-- Card -->
          <div class="card mt-4 text-withe bg-dark shadow border-4 border-info" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block h-100">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active car_img" data-bs-interval="3000">
                      <!-- <img src="https://pbs.twimg.com/media/EYfEhiiX0AA9Xma?format=jpg&name=900x900" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                    </div>
                    <div class="carousel-item car_img1" data-bs-interval="3000">
                      <!-- <img src="https://pbs.twimg.com/media/EUNSfNQWAAEP2BW.jpg" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                    </div>
                    <div class="carousel-item car_img2" data-bs-interval="3000">
                      <!-- <img src="https://pbs.twimg.com/media/D9CijIgWsAIrUXl.jpg" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" /> -->
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-7 d-flex align-items-center position-relative">
                <div class="card-body px-4 px-lg-5 fw-bolder">

                  <!-- Formulario -->
                  <form action="./procesos/sesionUsuario.php" method="POST">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                      <img src="../assets/img/logo10.png" style="width: 80px;" alt="logo">
                      <span class="h1 fw-bold mb-0 ms-2 text-white" style="font-family: 'Libre Baskerville', serif;">LynXXXes</span>
                    </div>
                    <div class="text-center">
                      <h5 class="fw-normal mb-4 pb-3 text-white" style="font-family: 'Libre Baskerville', serif;">¡Bienvenido! <br> Inicia sesión para continuar:</h5>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="floatingInput" name="usuario" required>
                      <label for="floatingInput"><i class="fas fa-thin fa-user-secret me-2"></i>Usuario</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="password" class="form-control" id="floatingPassword" name="password" required>
                      <label for="floatingPassword"><i class="fas fa-regular fa-key me-2"></i>Contraseña</label>
                    </div>
                   
                    <div class="mb-4">
                      <button class="btn btn-info">Iniciar</button>
                      <!-- <div class="d-grid gap-2">
                        <button class="btn btn_register btn-primary btn-block fa-lg p-3" type="button">Iniciar Sesión</button>
                      </div> -->
                    </div>
                  </form>

                  <hr class="bg-light">
                  <div class="text-center">
                    <p class="d-inline-block text-muted fs-6 fw-bold ">¿Aún no tienes cuenta papito?<a href="./registrar.php" class="text-decoration-none text-light ms-2">create una :)</a></p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
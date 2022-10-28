<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  <title>Registrarse</title>
</head>

<body class="background-radial-gradient overflow-hidden">

  <!-- Section: Design Block -->
  <section>
    <div class="container px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            THE BEST <br />
            <span style="color: hsl(218, 81%, 75%)">FREE PORN</span> <br>
            SITE
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            LynXXXes una página web de alojamiento de fotos pornográficas. LynXXXes fue fundada en CDMX en 2022 por los propietarios Mexicanos La cosita fea y La cosita más fea. El sitio web mexicano ahora está registrado a nombre de la empresa checa XZUNUN.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card text-withe bg-dark shadow border-4 border-info">
            <div class="card-body px-4 py-2 px-md-5">

              <!-- Formulario -->
              <form action="./procesos/registrarUsuario.php" method="POST">
                <div class="d-flex align-items-center justify-content-center mb-4">
                  <img src="../assets/img/logo10.png" style="width: 80px;" alt="logo">
                  <span class="h1 fw-bold mb-0 ms-2 text-white" style="font-family: 'Libre Baskerville', serif;">LynXXXes</span>
                </div>
                <div class="text-center">
                  <h5 class="fw-normal mb-4 pb-3 text-white" style="font-family: 'Libre Baskerville', serif;">¡Bienvenido! <br> Registrate para continuar:</h5>
                </div>
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="floatingInput" name="txtUsuario" required>
                  <label for="floatingInput"><i class="fas fa-thin fa-user-secret me-2"></i>Usuario</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="floatingPassword" name="txtPassword" required>
                  <label for="floatingPassword"><i class="fas fa-regular fa-key me-2"></i>Contraseña</label>
                </div>
                <div class="form-floating mb-4">
                  <select class="form-select" id="floatingSelectGrid" name="txtRol" required>
                    <option>Seleccionar</option>
                    <option value=1>Administrador</option>
                    <option value=2>Cliente</option>
                  </select>
                  <label for="floatingSelectGrid"><i class="fa-solid fa-users-line me-2"></i>Tipo de usuario</label>
                </div>
                <div class="mb-4">
                  <div class="d-grid gap-2">
                    <!-- <button class="btn btn_register btn-primary btn-block fa-lg p-3" type="button">Registrarse</button> -->
                    <button class="btn btn-primary">registrarse</button>
                  </div>
                </div>
              </form>
              <hr class="bg-light">
              <div class="text-center">
                <p class="d-inline-block text-muted fs-6 fw-bold ">¿Ya tienes cuenta?<a href="./index.php" class="text-decoration-none text-light"> Inicia Sesión :)</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
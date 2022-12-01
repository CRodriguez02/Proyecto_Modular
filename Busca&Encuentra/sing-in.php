<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">
    <title>Iniciar sesión</title>
    <link rel="icon" type="image/x-icon" href="assets/brand/B&E-logo.svg" />
    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">

      <!---Aqui inicia el form-->
      
      <form action="Phps/sing-in-query.php" method="post">

        <img class="mb-4" src="assets/brand/logo-02.png" width="200" height="200">
        <h1 class="h3 mb-3 fw-normal">Por favor inicie sesión</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo_elec" required autofocus>
          <label for="floatingInput">Correo electrónico</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
          <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
          <p>¿Aún no tienes una cuenta?
            <br>
            <a href="sing-up.php">Registrate aquí</a>
          </p>
        </div>
        
        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Inicie sesión">

      </form>
      <br><br><br><br>
      <a class="mt-5 mb-3 text-muted" href="index.php">Volver al inicio</a>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

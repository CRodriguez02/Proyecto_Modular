<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">
    <title>Registrarse</title>
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
      <!----Aqui empieza el form-->
      <form action="Phps/form_sing-up.php" class="row g-3 needs-validation" method="POST" novalidate>
        <img class="mb-4" src="assets/brand/logo-02.png" alt="" width="170" height="170">
        <h1 class="h3 mb-3 fw-normal">Registrarse</h1>
        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelNombre">Nombre(s)</label>
                <input name="nombre" type="text" class="form-control" id="labelNombre" placeholder="Nombre(s)" maxlength="100" pattern="[a-z-A-Z-á-ú-' ']+" required>
                <div class="invalid-feedback">
                  Por favor ingrese su nombre.
                </div>
            </div>
        </div>

        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelPaterno">Apellido Paterno</label>
                <input name="apellido_Pa" type="text" class="form-control" id="labelPaterno" placeholder="Apellido Paterno" maxlength="100" pattern="[a-z-A-Z-á-ú]+" required>
                <div class="invalid-feedback">
                  Por favor ingrese su apellido.
                </div>
            </div>
        </div>

        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelMaterno">Apellido Materno</label>
                <input name="apellido_Ma" type="text" class="form-control" id="labelMaterno" placeholder="Apellido Materno" maxlength="100" pattern="[a-z-A-Z-á-ú]+">
            </div>
        </div>
        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelCorreo">Correo electrónico</label>
                <input name="correo_elec" type="email" class="form-control" id="labelCorreo" placeholder="Correo electrónico" maxlength="255" required>
                <div class="invalid-feedback">
                  Por favor ingrese un correo valido.
                </div>
            </div>
        </div>
        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelUsuario">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="labelUsuario" placeholder="Usuario" maxlength="50" required>
                <div class="invalid-feedback">
                  Por favor ingrese su nombre de usuario.
                </div>
            </div>
        </div>
        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelContraseña1">Contraseña</label>
                <input name="contraseña" type="password" class="form-control" id="labelContraseña1" placeholder="Contraseña" maxlength="50" required>
                <div class="invalid-feedback">
                  Por favor ingrese su contraseña.
                </div>
            </div>
        </div>
        <div class="text-start">
            <div class="form-group">
                <label class="form-control-label" for="labelContraseña2">Confirmar Contraseña</label>
                <input name="confirma_contra" type="password" class="form-control" id="labelContraseña2" placeholder="Confirmar Contraseña" maxlength="50" required>
                <div class="invalid-feedback">
                  Por favor ingrese su contraseña.
                </div>
            </div>
        </div>
        <br>
        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Registrarse">

      </form>
      <br><br><br>
      <a class="mt-5 mb-3 text-muted" href="index.php">Volver al inicio</a>
    </main>
    <script>
      (function () {
        'use strict'

        
        var forms = document.querySelectorAll('.needs-validation')

        
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()

    </script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

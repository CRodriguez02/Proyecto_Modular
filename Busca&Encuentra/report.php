<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">
    <title>Reporte</title>
    <link rel="icon" type="image/x-icon" href="assets/brand/B&E-logo.svg" />

    <link rel="icon" type="image/x-icon" href="assets/brand/bootstrap-logo.svg" />

    
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
          background-color: rgba(243, 32, 32, 0.1);
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
</head>
<body>
  <!--LOGOS-->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</symbol>
<symbol id="chat" viewBox="0 0 16 16">
    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>

</symbol>


<symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
</symbol>
<symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</symbol>
<symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
</symbol>
</svg>
<!--LOGOS-->
<!--HEADER-->
<header>
    <div class="px-3 py-2 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img class="bi me-2" width="100" height="90" role="img" aria-label="" src="assets/brand/logo-02.png" title="Busca&Encuentra">
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
            <a href="index.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Inicio
            </a>
            </li>
            <li>
            <a href="system-chat.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#chat"/></svg>
                Mensajes
            </a>
            </li>
            <li>
            <a href="list-publications.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Publicaciones
            </a>
            </li>
            <li>
            <a href="publicacion.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Nuevas Publicaciones
            </a>
            </li>
            <li>
            <a href="my-account.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Cuenta
            </a>
            </li>
        </ul>
        </div>
    </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
        <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
        </form>
    </div>
    </div>
</header>
<!--HEADER-->
            <form class="container">
                <div class="text-center"> 
                    <h5 class="card-title">Levantar un reporte</h5>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="folio-reporte" class="col-form-label">Folio de Reporte</label>
                        <input type="text" class="form-control" id="folio-reporte" placeholder="Folio de Reporte">
                    </div>
                <div class="form-group col-md-2">
                    <label for="id-ob-masc" class="col-form-label">ID-Objeto/Mascota</label>
                    <input type="text" class="form-control" id="id-ob-masc" placeholder="ID">
                </div>
                <div class="form-group col-md-2">
                    <label for="User" class="col-form-label">Usuario</label>
                    <input type="text" class="form-control" id="User" placeholder="Tu usuario">
                </div>
                </div>
                <br>
                <label for="textarea">Describe el problema con la publicacion</label>
                  <!--Para seleccionar los Motivos de un reprte-->
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Seleccionar-motivo">
                      <option selected>Motivo por el que se reporta</option>
                      <option value="1">-Contenido inadecuado-</option>
                      <option value="2">-Publicación duplicada-</option>
                      <option value="3">-Es de mi propiedad y ya fue recuperado-</option>
                      <option value="4">-Estafa-</option>
                      <option value="5">-Otro-</option>
                    </select>
                  <br>
                  <br>
                    <textarea class="form-control" id="Descripcion" name="txt_descripcion" rows="3" placeholder="Agrega una descripción del porqué reportas la publicación"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" onclick="alert('Su reporte ha sido enviado con exito. Redireccionando...')">Enviar</button>
                </div>
            </form>
</body>
</html>
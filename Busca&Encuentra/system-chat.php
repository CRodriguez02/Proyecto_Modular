<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">
    <title>Chat</title>


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
    <link href="headers.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">

  </head>
<body>
    
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
              <a href="system-chat.php" class="nav-link text-secondary">
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
                  Nueva Publicación
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
    </header>
    <!--HEADER-->

    <div class="b-example-divider"></div>
   <!--Sistema de chat-->
    <section style="background-color: #eee;">
      <div class="container py-5">
    
        <div class="row">
    
          <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
    
            <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>
    
            <div class="card">
              <div class="card-body">
    
                <ul class="list-unstyled mb-0">
                  <li class="p-2 border-bottom" style="background-color: #eee;">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">John Doe</p>
                          <p class="small text-muted">Hello, Are you there?</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">Just now</p>
                        <span class="badge bg-danger float-end">1</span>
                      </div>
                    </a>
                  </li>
                  <li class="p-2 border-bottom">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Danny Smith</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">5 mins ago</p>
                      </div>
                    </a>
                  </li>
                  <li class="p-2 border-bottom">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Alex Steward</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">Yesterday</p>
                      </div>
                    </a>
                  </li>
                  <li class="p-2 border-bottom">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Ashley Olsen</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">Yesterday</p>
                      </div>
                    </a>
                  </li>
                  <li class="p-2 border-bottom">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Kate Moss</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">Yesterday</p>
                      </div>
                    </a>
                  </li>
                  <li class="p-2 border-bottom">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Lara Croft</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">Yesterday</p>
                      </div>
                    </a>
                  </li>
                  <li class="p-2">
                    <a href="#!" class="d-flex justify-content-between">
                      <div class="d-flex flex-row">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0">Brad Pitt</p>
                          <p class="small text-muted">Lorem ipsum dolor sit.</p>
                        </div>
                      </div>
                      <div class="pt-1">
                        <p class="small text-muted mb-1">5 mins ago</p>
                        <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                      </div>
                    </a>
                  </li>
                </ul>
    
              </div>
            </div>
    
          </div>
    
          <div class="col-md-6 col-lg-7 col-xl-8">
    
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                  class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                <div class="card">
                  <div class="card-header d-flex justify-content-between p-3">
                    <p class="fw-bold mb-0">Brad Pitt</p>
                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                  </div>
                  <div class="card-body">
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                    </p>
                  </div>
                </div>
              </li>
              <li class="d-flex justify-content-between mb-4">
                <div class="card w-100">
                  <div class="card-header d-flex justify-content-between p-3">
                    <p class="fw-bold mb-0">Lara Croft</p>
                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                  </div>
                  <div class="card-body">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                      laudantium.
                    </p>
                  </div>
                </div>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                  class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
              </li>
              <li class="d-flex justify-content-between mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                  class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                <div class="card">
                  <div class="card-header d-flex justify-content-between p-3">
                    <p class="fw-bold mb-0">Brad Pitt</p>
                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                  </div>
                  <div class="card-body">
                    <p class="mb-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                    </p>
                  </div>
                </div>
              </li>
              <li class="bg-white mb-3">
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                  <label class="form-label" for="textAreaExample2">Message</label>
                </div>
              </li>
              <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
            </ul>
    
          </div>
    
        </div>
    
      </div>
    </section>
    <!--Sistema de chat-->
    
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
    
      
</body>
</html>

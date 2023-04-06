<?php // mandarle el id al objeto como se hizo en el index
require "scripts_php/conectar.php";
require "scripts_php/funciones.php";
session_start();
error_reporting(0);

$busqueda=$_GET['busqueda'];
$cat=$_GET['categoria'];
if($busqueda!=null)
{
  $consulta_busqueda="SELECT * FROM mascotas where titulo LIKE '%$busqueda%' or especie LIKE '%$busqueda%' ";
  $ejecutar_busqueda=$db->query($consulta_busqueda);
  if(!$ejecutar_busqueda)
  {
      header('Location: error-404.html');
  }
  $row=mysqli_fetch_assoc($ejecutar_busqueda);


  $consulta_busqueda_ob="SELECT * FROM objeto where titulo LIKE '%$busqueda%' or categoria LIKE '%$busqueda%'";
  $ejecutar_busqueda_ob=$db->query($consulta_busqueda_ob);
  if(!$ejecutar_busqueda_ob)
  {
      header('Location: error-404.html');
  }
  $row_2=mysqli_fetch_assoc($ejecutar_busqueda_ob);
}
else
{
  $consulta_busqueda="SELECT * FROM mascotas where especie = '$cat' ";
  $ejecutar_busqueda=$db->query($consulta_busqueda);
  if(!$ejecutar_busqueda)
  {
      header('Location: error-404.html');
  }
  $row=mysqli_fetch_assoc($ejecutar_busqueda);


  $consulta_busqueda_ob="SELECT * FROM objeto where categoria = '$cat'";
  $ejecutar_busqueda_ob=$db->query($consulta_busqueda_ob);
  if(!$ejecutar_busqueda_ob)
  {
      header('Location: error-404.html');
  }
  $row_2=mysqli_fetch_assoc($ejecutar_busqueda_ob);
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">
    <title>Buscar - <?php echo($busqueda); echo($cat);?> </title>
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
    
        
        <!-- Custom styles for this template -->
        <link href="assets/dist/css/headers.css" rel="stylesheet">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="logo" viewBox="0 0 118 94">
        <title>Busca&Encuentra</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
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
        <div class="container"> <!----estebes el div chido-->
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
                    <?php
                    $autentidicacion_1=autenticado();
                    if(!$autentidicacion_1)
                    {
                      echo (' <a href="sing-in.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#chat"/></svg>
                      Mensajes<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                    } 
                    else
                    {
                      echo (' <a href="system-chat.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#chat"/></svg>
                      Mensajes<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                      
                    }
                    ?>
                      
                    
                    </li>
                    <li>
                    <?php
                    $autentidicacion_2=autenticado();
                    if(!$autentidicacion_2)
                    {
                      echo (' <a href="sing-in.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                      Publicaciones<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                    } 
                    else
                    {
                      echo (' <a href="list-publications.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                      Publicaciones<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                      
                    }
                    ?>
                    </li>
                    <li>
                    <?php
                    $autentidicacion_1=autenticado();
                    if(!$autentidicacion_1)
                    {
                      echo (' <a href="sing-in.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                      Nuevas publicaciones<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                    } 
                    else
                    {
                      echo (' <a href="publicacion.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                      Nuevas publicaciones<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                      
                    }
                    ?>
                    </li>
                    <li>
                    <?php
                    $autentidicacion_1=autenticado();
                    if(!$autentidicacion_1)
                    {
                      echo (' <a href="sing-in.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                      Cuenta<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                    } 
                    else
                    {
                      echo (' <a href="my-account.php" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                      Cuenta<!----aqio poner identificador para si no ha iniciado sesion se vaya a sing-in--->
                  </a>');
                      
                    }
                    ?>
                    
                    </li>
                </ul>
                </div>
            </div><!------aqui acaba el div chido-->
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-center">
          <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search" action="search.php" method="GET" >
              <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search" name="busqueda">
          </form>
        </div>
        </div>
    </header>
    <!--HEADER-->
    <br>
    <main>
        <section class="py-5">
        <div class="container">
            <div class="row gx-10">
                    <!--Columna de las categorias-->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header"> Categorias </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="search.php?categoria=Accesorios">Accesorios</a> </li>
                              <li class="list-group-item"><a href="search.php?categoria=Bicicletas">Bicicletas</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Bolsos">Bolsos</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Celulares">Celulares</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Computadoras">Computadoras</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Documentos escolares">Documentos escolares</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Documentos personales">Documentos personales</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Motocicletas">Motocicletas</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Vehiculos">Vehiculos</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Perro">Perros</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Gato">Gatos</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Ave">Aves</a></li>
                              <li class="list-group-item"><a href="search.php?categoria=Otros">Otros</a></li>
                            </ul>
                          </div>
                    </div>
                    <!--Columna de las categorias-->
    
                    
                    <div class="col-md-8">
                        <!--Titulo de la seccion-->
                        <div class="card mb-4 bg-light border-0">
                        <div class="card-body p-9">
                            <h2 class="mb-0 fs-1"> Usted buscó: <?php echo($busqueda); echo($cat);?> </h2>
                        </div>
                      </div>
                       <!--Titulo de la seccion-->
                      <!--Elementos encontrados-->
                      
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <span class="text-dark">Resultados encontrados:</span>
                            <?php echo ($ejecutar_busqueda->num_rows + $ejecutar_busqueda_ob->num_rows);?>
                        </div>
                    </div>
                    <!--Si no se encontaron elementos-->
                    <?php 
                    if($ejecutar_busqueda->num_rows==0 && $ejecutar_busqueda_ob->num_rows==0)
                    { ?>  
                    <div class="alert alert-danger text-center" role="alert">
                            No se encontraron resultados.
                    </div>
                    <?php }
                    else { 
                      ?>
                    <!--Elementos encontrados-->
                    <!--Mascotas mostradas-->
                    
                    <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2" >
                        <!--Mascotas-->
                      <?php foreach($ejecutar_busqueda as $row)
                      { ?>
                        <div class="col">
                            <div class="card card-product" style="width: 170px; height: 250px;">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <!--Etiqueta-->
                                        <div class="position-absolute top-0 start-0">
                                        <?php
                           
                                          if($row['recompensa']==1)
                                          {
                                            echo ('<span class="badge bg-success">Recompensa</span>');
                                          }
                          
                                          ?>
                                        </div>
                                        <!--Etiqueta-->
                                        <!--Imagen-->
                                        <a href="object.php" >
                                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" class="card-img-top" alt="" style="width: 132px; height: 132px">
                                        </a>
                                        <!--Imagen-->
                                        <!--Categoria-->
                                        <div class="text-small mb-1">
                                            <a class="text-decoration-none text-muted">
                                                <small><?php echo($row['especie']);  ?></small>
                                            </a>
                                        </div>
                                        <!--Categoria-->
                                        <!--Titulo-->
                                        <h2 class="fs-6">
                                            <a class="text-inherit text-decoration-none" href="object.php"><?php echo($row['titulo']);  ?></a>
                                        </h2>
                                        <!--Titulo-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                      <?php }?>
                      <!--Mascotas-->
                    </div>

                    <!--Objetos-->
                    <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                        <!--Objetos-->
                      <?php foreach($ejecutar_busqueda_ob as $row_2)
                      { ?>
                        <div class="col">
                            <div class="card card-product" style="width: 170px; height: 250px;">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <!--Etiqueta-->
                                        <div class="position-absolute top-0 start-0">
                                        <?php
                           
                                          if($row_2['recompensa']==1)
                                          {
                                            echo ('<span class="badge bg-success">Recompensa</span>');
                                          }
                          
                                          ?>
                                        </div>
                                        <!--Etiqueta-->
                                        <!--Imagen-->
                                        <a href="object.php" >
                                            <img src="data:image/jpg;base64,<?php echo base64_encode($row_2['imagen']);?>" class="card-img-top" alt="" style="width: 132px; height: 132px">
                                        </a>
                                        <!--Imagen-->
                                        <!--Categoria-->
                                        <div class="text-small mb-1">
                                            <a class="text-decoration-none text-muted">
                                                <small><?php echo($row_2['especie']);  ?></small>
                                            </a>
                                        </div>
                                        <!--Categoria-->
                                        <!--Titulo-->
                                        <h2 class="fs-6">
                                            <a class="text-inherit text-decoration-none" href="object.php"><?php echo($row_2['titulo']);  ?></a>
                                        </h2>
                                        <!--Titulo-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                      <?php }?>
                    </div>
                      <!--Objetos-->
                    
                    <?php }?>


                    <!--Paginación de la web
                    <br>
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                    ***********************coment:Pendienete de poner o tal vez no se use
                    Paginación de la web-->
                    <br><br><br><br>
            </div>
        </div>
        </section>
    </main>
    <!--Buttom-->
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">Busca&Encuentra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="list-publications.php">Mis Publicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="my-account.php">Mi cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.html">Acerca de nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="auxbot.html">Asistente-BOB</a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
       <!--Buttom-->

</body>
</html>
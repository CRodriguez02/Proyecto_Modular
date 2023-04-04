<?php
require "scripts_php/conectar.php";
require "scripts_php/funciones.php";
session_start();
error_reporting(0);


//estan al reves
$select_buscados_encontrados="SELECT id,imagen,titulo,descripcion,fk_username_Objeto, recompensa FROM objeto where estado=0";
$ejecuta_1=mysqli_query($db,$select_buscados_encontrados);
$select2="SELECT id,imagen,titulo,descripcion,fk_username_Objeto, recompensa FROM objeto where estado=0";
$ejecuta_2=mysqli_query($db,$select2);
$select3="SELECT id,imagen,titulo,descripcion,fk_username_Objeto, recompensa  FROM objeto where estado=0";
$ejecuta_3=mysqli_query($db,$select2);

$select_buscados_noecnontrados="SELECT id,imagen,titulo,descripcion,fk_username_Objeto, recompensa FROM objeto where estado=1";
$ejecuta_1n=mysqli_query($db,$select_buscados_noecnontrados);
$selectn2="SELECT imagen,titulo,descripcion,id,fk_username_Objeto, recompensa  FROM objeto where estado=1";
$ejecuta_n2=mysqli_query($db,$selectn2);
$selectn3="SELECT imagen,titulo,descripcion,id,fk_username_Objeto, recompensa  FROM objeto where estado=1";
$ejecuta_n3=mysqli_query($db,$selectn3);
//--------------------------------------------------------------------------------------------

$select_m1="SELECT imagen,titulo,descripcion,id,fk_username_Mascota, recompensa  FROM mascotas where estado=0";
$ejecuta_1m=mysqli_query($db,$select_m1);
$select_m2="SELECT imagen,titulo,descripcion,id,fk_username_Mascota, recompensa   FROM mascotas where estado=0";
$ejecuta_2m=mysqli_query($db,$select_m2);
$select_m3="SELECT imagen,titulo,descripcion,id,fk_username_Mascota , recompensa  FROM mascotas where estado=0";
$ejecuta_3m=mysqli_query($db,$select_m3);

$select_nm1="SELECT imagen,titulo,descripcion,id,fk_username_Mascota, recompensa   FROM mascotas where estado=1";
$ejecuta_nm1=mysqli_query($db,$select_nm1);
$select_nm2="SELECT imagen,titulo,descripcion,id,fk_username_Mascota, recompensa  FROM mascotas where estado=1";
$ejecuta_nm2=mysqli_query($db,$select_nm2);
$select_nm3="SELECT imagen,titulo,descripcion,id,fk_username_Mascota, recompensa  FROM mascotas where estado=1";
$ejecuta_nm3=mysqli_query($db,$select_nm3);




?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Carlos Rodriguez, Ozmar Andrade, Marlene Rios">

    <title>Busca&Encuentra - Inicio</title>
    <link rel="icon" type="image/x-icon" href="assets/brand/B&E-logo.svg" />

    
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/index.css">
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
    <main>
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
                    <a href="index.php" class="nav-link text-secondary">
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
                


              <?php
            //autenticar
            $autentidicacion=autenticado();
              if(!$autentidicacion)
              {
                echo (' <div class="text-end">
                <a href="sing-in.php" class="btn btn-light text-dark me-2">Iniciar sesión</a>
                <a href="sing-up.php"  class="btn btn-primary">Registrarse</a>
                </div>');
              } 
              ?>
            </div>
          </div>

          
                       
      <!--HEADER-->
      <!--BANER-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/Banner+idea.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/Banner1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/Banner2.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <!--BANER-->

      <!--Contenido--> <!----aqui van los que se buscan los objetos---->
      <h2 class="alert-heading"> Objetos:  </h2>
      <section class="py-5">
        <div class="container-fluid"><!-----aqui esta el conteiner--->
          <div class="p-3 mb-2 bg-danger text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            Se buscan...
          </div>
          <!--Separador y objetos-->
                <!--carousel-->  
                <div id="carouselExampleControlsSmallScreen1" class="carousel slide-dark " data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active"><!--COMENTARIO PARA OZ: ESTA SERIA LA PRIMER PAGINA-->
                      <div class="cards-wrapper"> <!--COMENTARIO PARA OZ: ESTE DIV PODRIA DECIR QUE ES EL "CONTAINER DE LAS CARTAS Y CADA PAGINA TIENE UNA DE ESTAS-->
                        <!--Carta maximo 5-->
                        <?php  
                        $contador=0;
                          foreach($ejecuta_1 as $row_1)
                          {  $contador++;?>
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($row_1['imagen']);?>" class="card-img-top" alt="..."><!---poner foto--->
                          <?php
                           
                          if($row_1['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo($row_1['titulo']);  ?>  </h5><!---titulo objeto--->
                            <p class="card-text"><?php echo($row_1['descripcion']);  ?> </p><!---descripcion-->
                            <a href="object.php?id=<?php echo $row_1['id'];?>&bd=objeto&estado=0&user=<?php echo $row_1['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 1--->
                        </div><!------aqui poner la llave de cierre abajo de este div--->
                        <?php
                        if($contador==5)
                        break;  
                      } ?>
                        <!--COMENTARIO PARA OZ: EL "CAROUSEL" ESTA DISEÑADO PARA MOSTRAR 4 CARTAS O MAXIMO 5, ASÍ QUE POR FAVOR QUE SE MUESTEN AQUI-->
                      </div>
                    </div>
                    <div class="carousel-item"><!--COMENTARIO PARA OZ: ESTA SERIA LA SEGUNDA PAGINA-->
                      <div class="cards-wrapper">
                            <?php  
                            $num=0;
                            while($fila=$ejecuta_2->fetch_array())
                            { $num++;
                              
                              if($num>=6 && $num<9)
                              {
                            ?>                      
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila['titulo']);  ?> </h5>
                            <p class="card-text"><?php echo( $fila['descripcion']);  ?> </p>
                            <a href="object.php?id=<?php echo $fila['id'];?>&bd=objeto&estado=0&user=<?php echo $fila['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 2--->
                        </div><!--COMENTARIO PARA OZ: OTRAS 4 o 5 CARTAS AQUI PAPI-->    <!------aqui poner la llave de cierre abajo de este div--->                                       
                            <?php
                  
                              }
                            }?>
                      </div>
                    </div>
                    <div class="carousel-item"><!--COMENTARIO PARA OZ: ESTA SERIA LA TERCER PAGINA-->
                      <div class="cards-wrapper">
                        <!--Carta-->
                        <?php  
                            $n=0;//variable de control para saver en que punto va a tratat de poner las imagenes
                            while($fila2=$ejecuta_3->fetch_array())
                            { 
                              $n++;
                              if($n>=11 && $n>21)
                              {
                            ?>    
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila2['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fil2['estado']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila2['titulo']);  ?></h5>
                            <p class="card-text"><?php echo( $fila2['descripcion']);  ?></p>
                            <a href="object.php?id=<?php echo $fila2['id'];?>&bd=objeto&user=<?php echo $fila2['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div>
                        </div><!---FIN CARTA PAGINA 3--->
                        <?php
                              }
                            }?>
                        <!--COMENTARIO PARA OZ: AQUI TAMBIEN 4 o 5-->
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                          </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <!--carousel-->

          <!--Separador y objetos-->
          <div class="p-3 mb-2 bg-success text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-exclamation" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/></svg>
            ¡Encontrados!<!-----------------Encontrados------------------------------------------->
          </div>
          <!--Separador y objetos-->
          <!--carousel-->
          <div id="carouselExampleControlsSmallScreen2" class="carousel slide-dark " data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="cards-wrapper">
                        <!--Carta-->
                        <?php  
                        $contador_n=0;
                          foreach($ejecuta_1n as $row_1)
                          {  $contador_n++;?>
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($row_1['imagen']);?>" class="card-img-top" alt="..."><!---poner foto--->
                          <?php
                          if($row_1['recompensa']==1)
                          {
                            
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo($row_1['titulo']);  ?>  </h5><!---titulo objeto--->
                            <p class="card-text"><?php echo($row_1['descripcion']);  ?> </p><!---descripcion-->
                            <a href="object.php?id=<?php echo($row_1['id']); ?>&bd=objeto&user=<?php echo $row_1['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información </a>
                          </div><!---FIN CARTA PAGINA 1--->
                        </div><!------aqui poner la llave de cierre abajo de este div--->
                        <?php
                        if($contador_n==5)
                        break;  
                      } ?>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                        <?php
                            $num_n=0;
                            while($fila=$ejecuta_n2->fetch_array())
                            { $num_n++;
                              
                              if($num_n>=6 && $num_n<9)
                              {
                            ?>                      
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila['estado']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila['titulo']);  ?> </h5>
                            <p class="card-text"><?php echo( $fila['descripcion']);  ?> </p>
                            <a href="object.php?id=<?php echo $fila['id'];?>&bd=objeto&user=<?php echo $fila['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 2--->
                        </div> <!------aqui poner la llave de cierre abajo de este div--->                                       
                            <?php
                  
                              }
                            }?>

                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                      <?php  
                            $n_n=0;//variable de control para saver en que punto va a tratat de poner las imagenes
                            while($fila2=$ejecuta_n3->fetch_array())
                            { 
                              $n_n++;
                              if($n_n>=11 && $n_n>21)
                              {
                            ?>    
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila2['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila2['estado']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila2['titulo']);  ?></h5>
                            <p class="card-text"><?php echo( $fila2['descripcion']);  ?></p>
                            <a href="object.php?id=<?php echo $fila2['id'];?>&bd=objeto&user=<?php echo $fila2['fk_username_Objeto'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div>
                        </div><!---FIN CARTA PAGINA 3--->
                        <?php
                              }
                            }?>
                        <!--COMENTARIO PARA OZ: AQUI TAMBIEN 4 o 5-->
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <!--carousel-->
          
        </div>
      </section>
      <!--Contenido-->

      <!--Contenido--> <!----aqui van los que se buscan los objetos---->
      <div class="position-absolute top-50 start-50 translate-middle"></div>
      <h2 class="alert-heading"> Mascotas:  </h2>
      <section class="py-5">
        <div class="container-fluid"><!-----aqui esta el conteiner--->
          <div class="p-3 mb-2 bg-danger text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            Se buscan...
          </div>
          <!--Separador y objetos-->
                <!--carousel-->
                   
                <div id="carouselExampleControlsSmallScreen3" class="carousel slide-dark " data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="cards-wrapper"> 
                        <!--Carta maximo 5-->
                        <?php  
                        $contador_m=0;
                          foreach($ejecuta_1m as $row_1)
                          {  $contador_m++;?>
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($row_1['imagen']);?>" class="card-img-top" alt="..."><!---poner foto--->
                          <?php
                          if($row_1['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo($row_1['titulo']);  ?>  </h5><!---titulo objeto--->
                            <p class="card-text"><?php echo($row_1['descripcion']);  ?> </p><!---descripcion-->
                            <a href="object.php?id=<?php echo $row_1['id'];?>&bd=mascotas&user=<?php echo $row_1['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 1--->
                        </div><!------aqui poner la llave de cierre abajo de este div--->
                        <?php
                        if($contador_m==5)
                        break;  
                      } ?>
                        
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                            <?php  
                            $num_m=0;
                            while($fila=$ejecuta_2m->fetch_array())
                            { $num_m++;
                              
                              if($num_m>=6 && $num_m<11)
                              {
                            ?>                      
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila['titulo']);  ?> </h5>
                            <p class="card-text"><?php echo( $fila['descripcion']);  ?> </p>
                            <a href="object.php?id=<?php echo $fila['id'];?>&bd=mascotas&user=<?php echo $row_1['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 2--->
                        </div>    <!------aqui poner la llave de cierre abajo de este div--->                                       
                            <?php
                  
                              }
                            }?>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                        <!--Carta-->
                        <?php  
                            $n_m=0;//variable de control para saver en que punto va a tratat de poner las imagenes
                            while($fila2=$ejecuta_3m->fetch_array())
                            { 
                              $n_m++;
                              if($n_m>=11 && $n_m<16)
                              {
                            ?>    
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila2['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila2['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila2['titulo']);  ?></h5>
                            <p class="card-text"><?php echo( $fila2['descripcion']);  ?></p>
                            <a href="object.php?id=<?php echo $fila2['id'];?>&bd=mascotas&user=<?php echo $fila2['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div>
                        </div><!---FIN CARTA PAGINA 3--->
                        <?php
                              }
                            }?>
                        
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                          </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <!--carousel-->

          <!--Separador y objetos-->
          <div class="p-3 mb-2 bg-success text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-exclamation" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/></svg>
            ¡Encontrados!
          </div>
          <!--Separador y objetos-->
          <!--carousel-->
          <div id="carouselExampleControlsSmallScreen4" class="carousel slide-dark " data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="cards-wrapper">
                        <!--Carta--> 

                        <?php  
                        $contador_nm=0;
                          foreach($ejecuta_nm1 as $row_1)
                          {  $contador_nm++;?>
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($row_1['imagen']);?>" class="card-img-top" alt="..."><!---poner foto--->
                          <?php
                          if($row_1['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo($row_1['titulo']);  ?>  </h5><!---titulo objeto--->
                            <p class="card-text"><?php echo($row_1['descripcion']);  ?> </p><!---descripcion-->
                            <a href="object.php?id=<?php echo $row_1['id'];?>&bd=mascotas&&user=<?php echo $row_1['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 1--->
                        </div><!------aqui poner la llave de cierre abajo de este div--->
                        <?php
                        if($contador_nm==5)
                        break;  
                      } ?>
                        
                        
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                      <?php  
                            $num_nm=0;
                            while($fila=$ejecuta_nm2->fetch_array())
                            { $num_m++;
                              
                              if($num_nm>=6 && $num_nm<11)
                              {
                            ?>                      
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila['titulo']);  ?> </h5>
                            <p class="card-text"><?php echo( $fila['descripcion']);  ?> </p>
                            <a href="object.php?id=<?php echo $fila['id'];?>&bd=mascotas&user=<?php echo $fila['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div><!---FIN CARTA PAGINA 2--->
                        </div>                                      
                            <?php
                  
                              }
                            }?>

                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="cards-wrapper">
                      <?php  
                            $n_nm=0;//variable de control para saver en que punto va a tratat de poner las imagenes
                            while($fila2=$ejecuta_nm3->fetch_array())
                            { 
                              $n_nm++;
                              if($n_nm>=11 && $n_nm<16)
                              {
                            ?>    
                        <div class="card text-center" style="width: 18rem;">
                          <img src="data:image/jpg;base64,<?php echo base64_encode($fila2['imagen']);?>" class="card-img-top" alt="...">
                          <?php
                          if($fila2['recompensa']==1)
                          {
                            echo (' <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Recompensa</div>');
                          }
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"> <?php echo( $fila2['titulo']);  ?></h5>
                            <p class="card-text"><?php echo( $fila2['descripcion']);  ?></p>
                            <a href="object.php?id=<?php echo $fila2['id'];?>&bd=mascotas&user=<?php echo $fila2['fk_username_Mascota'];?>" class="btn btn-outline-dark mt-auto">Ver información</a>
                          </div>
                        </div><!---FIN CARTA PAGINA 3--->
                        <?php
                              }
                            }?>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <!--carousel-->
          
        </div>
        
      </section>
      <!--Contenido-->


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

    <!--<div class="b-example-divider"></div>-->
    </main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>

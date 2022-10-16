<?php
require "conectar.php";
$nombres=$_POST["nombre"];
$apellido_pa=$_POST["apellido_Pa"];
$apellido_ma=$_POST["apellido_Ma"];
$correo_electronico=$_POST["correo_elec"];
$usuario=$_POST["usuario"]; //usuario va para primarikey
$contrasena=$_POST["contraseña"];
$contrasena_confirma=$_POST["confirma_contra"];




        /*$insert_sql="INSERT INTO usuarios (username,correo,nombre,apellido_paterno,apellido_materno,contrasena)  
        VALUES ('$usuario','$correo_electronico','$nombres','$apellido_pa','$apellido_ma','$contrasena')";
        $consulta=mysqli_query($db,$insert_sql);


    if($consulta)
    {
        echo "correcto";
    }

    else
    {
        echo "incorrecto";
    }*/



?>
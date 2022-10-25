<?php
    error_reporting(0);
    require "conectar.php";
    $nombres=$_POST["nombre"];
    $apellido_pa=$_POST["apellido_Pa"];
    $apellido_ma=$_POST["apellido_Ma"];
    $correo_electronico=$_POST["correo_elec"];
    $usuario=$_POST["usuario"]; //usuario va para primarikey
    $contrasena=$_POST["contraseña"];
    $contrasena_confirma=$_POST["confirma_contra"];


    //Consulta para verificar que el registro no exista
    $validar = "SELECT * FROM usuarios where username='$usuario'";
    $validando=$db->query($validar);
    if($validando->num_rows>0)
    {
        echo("el usuario esta repetido");
    }
    else
    {
            //$checar_usuario="if(username==$usuario)FROM usuarios"

            $insert_sql="INSERT INTO usuarios (username,correo,nombre,apellido_paterno,apellido_materno,contrasena)  
            VALUES ('$usuario','$correo_electronico','$nombres','$apellido_pa','$apellido_ma','$contrasena')";
            $consulta=mysqli_query($db,$insert_sql);

        if($consulta)
        {
            echo "correcto si estamos en este proyecto";
        }

        else
        {
            echo "incorrecto";
        }

    }

        



?>
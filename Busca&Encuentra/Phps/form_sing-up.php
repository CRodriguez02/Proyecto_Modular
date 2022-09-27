<?php
require "conectar.php";
$nombres=$_GET["nombre"];
$apellido_pa=$_GET["apellido_Pa"];
$apellido_ma=$_GET["apellido_Ma"];
$correo_electronico=$_GET["correo_elec"];
$usuario=$_GET["usuario"]; //usuario va para primarikey
$contrasena=$_GET["contraseña"];
$contrasena_confirma=$_GET["confirma_contra"];

if(Saber_usuario($usuario,$db)==1)
{
    echo 2;
}
else
{
    $insert_sql="INSERT INTO usuarios (username,correo,nombre,apellido_paterno,apellido_materno,contrasena)  
    VALUES ('$usuario','$correo_electronico','$nombres','$apellido_pa','$apellido_ma','$contrasena')";
    $consulta=mysqli_query($db,$insert_sql);

}




/*if($consulta)
{
    echo "correcto";
}

else
{
    echo "incorrecto";
}*/

function Saber_usuario($usser,$conexion)
{
    $sql="SELECT username FROM usuarios WHERE username=$usser";
    $resultado=mysqli_query($conexion,$sql);

    if(mysqli_num_rows($resultado)>0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

?>
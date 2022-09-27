<?php
$nombres=$_GET["nombre"];
$apellido_pa=$_GET["apellido_Pa"];
$apellido_ma=$_GET["apellido_Ma"];
$correo_electronico=$_GET["correo_elec"];
$usuario=$_GET["usuario"];
$contrasena=$_GET["contraseña"];
$contrasena_confirma=$_GET["confirma_contra"];

echo "El valor es: ". $nombres;
require "conectar.php";

$sentencia_sql="ISERT INTO USUARIO ()"

?>
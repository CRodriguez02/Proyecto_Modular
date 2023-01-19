<?php
error_reporting(0);
require "conectar.php";
//7 campos||   username,correo,nombre,apellido_patern,apellido_materno,contrasena,imagen;

$username=$_POST['unsername'];
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$apellido_pa=$_POST['apellido_pa'];
$apellido_ma=$_POST['apellido_ma'];
$contrasena=$_POST['contrasena'];
$imagen=$_POST['imagen'];

?>
<?php
require("conectar.php");
require("conectar-chat.php");
session_start();

$sesion_iniciada=$_SESSION['usuario'];

$nombres=$_POST["nombre"];
$apellido_pa=$_POST["apellido_paterno"];
$apellido_ma=$_POST["apellido_materno"];
$correo_electronico=$_POST["correo_electronico"];


$consulta= "UPDATE usuarios SET nombre='$nombres',apellido_paterno='$apellido_pa',apellido_materno='$apellido_ma', correo='$correo_electronico' WHERE username='$sesion_iniciada'" ;
$valida_consulta=$db->query($consulta);

$consulta2= "UPDATE usuarios SET nombre='$nombres',apellido_paterno='$apellido_pa',apellido_materno='$apellido_ma' WHERE unique_id='$sesion_iniciada'" ;
$valida_consulta2=$db_chat->query($consulta2);

if($valida_consulta)
{
    header('Location: http://localhost/Proyecto_Modular/Busca&Encuentra/my-account.php');
}

?>


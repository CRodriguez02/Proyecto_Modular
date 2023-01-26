<?php
//error_reporting(0);
require("conectar.php");
session_start();
$_SESSION['usuario'];
//7 campos||   username,correo,nombre,apellido_patern,apellido_materno,contrasena,imagen;

$username=$_SESSION['usuario'];//llave forane
//ID
$titulo=$_POST["txt_titulo"];
$descripcion=$_POST["txt_descripcion"];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
//OBJETO ENCONTRADO O NO
$especie=$_POST["especie"];
$raza=$_POST["razas"];
$recompensa=$_POST["recompensa"];
$estado=$_POST["motivo"];

$sentencia_sql="INSERT INTO mascotas(fk_username_Mascota,titulo,descripcion,imagen,estado,especie,raza,recompensa)
values('$username','$titulo','$descripcion','$imagen','$estado','$especie','$raza','$recompensa');";
$ejecuta_query=$db->query($sentencia_sql);
if($ejecuta_query)
{
    header("Location: ../publicacion.php");
}
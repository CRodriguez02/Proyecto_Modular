<?php
error_reporting(0);
require("conectar.php");
session_start();
$_SESSION['usuario'];
//7 campos||   username,correo,nombre,apellido_patern,apellido_materno,contrasena,imagen;

$username=$_SESSION['usuario'];//llave forane
//ID
$titulo=$_POST["txt_titulo"];
$descripcion=$_POST["txt_descripcion"];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$estado=$_POST["motivo"];//OBJETO ENCONTRADO O NO
$tipo_objeto=$_POST["tipo_objeto"];
$recompensa=$_POST["recompensa"];

$sentencia_sql="INSERT INTO objeto (fk_username_Objeto,titulo,descripcion,imagen,estado,categoria,recompensa)
values('$username','$titulo','$descripcion','$imagen',$estado,'$tipo_objeto',$recompensa);";
$valida_consulta=$db->query($sentencia_sql);
if($valida_consulta)
{
   header("Location: ../list-publications.php");
}
else
{
   header('Location: ../error-404.html');
}

?>
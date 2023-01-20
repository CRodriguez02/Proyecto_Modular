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
$estado_perdido=$_POST["motivo_perdido"];//OBJETO ENCONTRADO O NO
$tipo_objeto=$_POST["tipo_objeto"];
$estado_encontrado=$_POST["motivo_encontrado"];
$recompensa_si=$_POST["recompensa_si"];
$recompensa_no=$_POST["recompensa_no"];

if($_POST["motivo_perdido"]=="0"&&$_POST["recompensa_no"]==0 )
{
    $sentencia_sql="INSERT INTO objeto (fk_username_Objeto,titulo,descripcion,imagen,estado,categoria,recompensa)
    values('$username','$titulo','$descripcion','$imagen',$estado_perdido,'$tipo_objeto',$recompensa_no);";
    $valida_consulta=$db->query($sentencia_sql);
    if($valida_consulta)
    {
       header("Location: ../publicacion.php");
    }
}

    
  


/*$sentencia_sql="INSERT INTO objeto (fk_username_Objeto,titulo,descripcion,imagen,estado,categoria,recompensa)
    values('$username','$titulo','$descripcion',$imagen,$estado_perdido,'objeto2',$recompensa_no);";
    $valida_consulta=$db->query($sentencia_sql); */



?>
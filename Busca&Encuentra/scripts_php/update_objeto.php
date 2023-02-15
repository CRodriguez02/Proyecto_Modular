<?php
require("conectar.php");

$titulo=$_POST["txt_titulo"];
$descripcion=$_POST["txt_descripcion"];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$estado=$_POST["motivo"];//OBJETO ENCONTRADO O NO
$tipo_objeto=$_POST["tipo_objeto"];
$recompensa=$_POST["recompensa"];
$id=$_GET['id'];
//hacemos consulta de todo lo que tiene el usuario

  
   $sentencia_sql="UPDATE objeto SET titulo='$titulo', descripcion='$descripcion', imagen='$imagen',estado='$estado',categoria='$tipo_objeto'
   ,recompensa='$recompensa' WHERE ID='$id'";
   $valida_consulta=$db->query($sentencia_sql);
   if($valida_consulta)
   {
      header("Location: ../list-publications.php");
   }
  

  // foreach($ejecutar_objeto as $row)
   









?>
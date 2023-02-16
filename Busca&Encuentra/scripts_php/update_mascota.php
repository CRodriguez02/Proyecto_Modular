<?php
require("conectar.php");

$titulo=$_POST["txt_titulo"];
$descripcion=$_POST["txt_descripcion"];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$estado=$_POST["motivo"];//OBJETO ENCONTRADO O NO
$especie=$_POST["especie"];
$raza=$_POST['razas'];
$recompensa=$_POST["recompensa"];
$id=$_GET['id'];//aqui l cachamos con el get y 'id' es el nombre de nuestra variable, por asi decirlo el name que le ponemos
//hacemos consulta de todo lo que tiene el usuario

  
   $sentencia_sql="UPDATE mascotas SET titulo='$titulo', descripcion='$descripcion', imagen='$imagen',estado='$estado'
   ,especie='$especie',raza='$raza',recompensa='$recompensa' WHERE ID='$id'";
   $valida_consulta=$db->query($sentencia_sql);
   if($valida_consulta)
   {
      header("Location: ../list-publications.php");
   }
  




?>
<?php    
require("conectar.php");
$motivo=$_POST["Seleccionar-motivo"];
$descripcion=$_POST['txt_descripcion'];
$id=$_GET['id'];
$usuario=$_GET['user'];//viene de objeto y manda el el nombre del campo
$base_datos=$_GET['base_datos'];

if($base_datos=="mascotas")
{
    
   $query_mascota="INSERT INTO reportes (motivo,descripcion,id_objeto,id_mascota,fk_username)
    VALUES ('$motivo','$descripcion',null,$id,'$usuario');";
    $ejecuta_mascota=mysqli_query($db,$query_mascota);

    header("Location: ../index.php");
}
else
{
    
    $query_objeto="INSERT INTO reportes (motivo,descripcion,id_objeto,id_mascota,fk_username)
    VALUES ('$motivo','$descripcion',$id,null,'$usuario')";
     $ejecuta_objeto=mysqli_query($db,$query_objeto);
     header("Location: ../index.php");
}


?>
<?php    
require("conectar.php");
$motivo=$_POST["Seleccionar-motivo"];
$descripcion=$_POST['txt_descripcion'];
$id=$_GET['id'];
$user=$_GET['user'];
$base_datos=$_GET['base_datos'];
$user2=13;

echo $user. "<br><br>";
    $query_mascota="SELECT * FROM objeto WHERE ID='$user2' ";
    $ejecuta_mascota=mysqli_query($db,$query_mascota);
    $row=mysqli_fetch_assoc($ejecuta_mascota);
    echo $row['username'];

if($base_datos=="mascotas")
{
    
   /*$query_mascota="INSERT INTO reportes (motivo,descripcion,id_objeto,id_mascota,fk_username)
    VALUES ('$motivo','$descripcion',null,$id,$user);";
    $ejecuta_mascota=mysqli_query($db,$query_mascota);

   /* header("Location: ../object.php");*/
}
else
{
    
    /*$query_objeto="INSERT INTO reportes (motivo,descripcion,id_objeto,id_mascota,fk_username)
    VALUES ('$motivo','$descripcion',$id,null,'$user')";
     $ejecuta_objeto=mysqli_query($db,$+7query_objeto);
     header("Location: ../object.php");*/
}


?>
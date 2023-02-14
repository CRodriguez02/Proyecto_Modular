<?php
session_start();
require("conectar.php");
$usuario=$_SESSION['usuario'];
$consulta_mascota="SELECT id FROM mascotas where fk_username_Mascota='$usuario'";
$ejecutar_mascota=$db->query($consulta_mascota);
$row=mysqli_fetch_assoc($ejecutar_mascota);

$id=$row['id'];

$sql="DELETE FROM mascotas WHERE id=$id";
$borra=$db->query($sql);
if($borra)
{
    header("Location: ../list-publications.php");
}


?>
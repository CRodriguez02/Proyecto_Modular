<?php
session_start();
require("conectar.php");
$usuario=$_SESSION['usuario'];
$consulta_objeto="SELECT id FROM objeto where fk_username_Objeto='$usuario'";
$ejecutar_objeto=$db->query($consulta_objeto);
$row=mysqli_fetch_assoc($ejecutar_objeto);

$id=$row['id'];

$sql="DELETE FROM objeto WHERE id=$id";
$borra=$db->query($sql);
if($borra)
{
    header("Location: ../list-publications.php");
}


?>
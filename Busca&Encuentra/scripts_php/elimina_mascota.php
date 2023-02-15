<?php
session_start();
require("conectar.php");
$sirve=$_GET['id'];
//echo $sirve;
$sql="DELETE FROM mascotas WHERE id=$sirve";
$borra=$db->query($sql);
if($borra)
{
    header("Location: ../list-publications.php");
}


?>
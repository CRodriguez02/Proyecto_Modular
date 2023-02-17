<?php

require("conectar.php");
$sirve=$_GET['id'];
//echo $sirve;
$sql="DELETE FROM objeto WHERE id=$sirve";
$borra=$db->query($sql);
if($borra)
{
    header("Location: ../list-publications.php");
}


?>
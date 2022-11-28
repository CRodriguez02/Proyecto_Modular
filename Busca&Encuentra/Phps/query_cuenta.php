<?php

require("conectar.php");
$nombres=$_POST["nombre"];
$apellido_pa=$_POST["apellido_paterno"];
$apellido_ma=$_POST["apellido_materno"];
$correo_electronico=$_POST["correo_electronico"];


$consulta=  "UPDATE usuarios SET nombre='$nombres'";
$valida_consulta=$db->query($consulta);

?>


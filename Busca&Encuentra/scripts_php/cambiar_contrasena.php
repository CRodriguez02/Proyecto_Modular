<?php
require("conectar.php");
session_start();
$usuario=$_SESSION['usuario'];
$pas1=$_POST["contraseña-nueva1"];
$pas2=$_POST["contraseña-nueva2"];

if($pas1==$pas2)
{
    $sql="UPDATE usuarios set contrasena='$pas2' where username='$usuario';";
    $ejecuta=$db->query($sql);
    header("Location: ../my-account.php");

}
else
{
    header('Location: ../alerta-contra.html');
}

?>
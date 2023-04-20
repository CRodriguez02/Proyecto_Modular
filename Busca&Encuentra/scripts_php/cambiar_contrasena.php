<?php
require("conectar.php");
session_start();
$usuario=$_SESSION['usuario'];
$pas1=$_POST["contraseña-nueva1"];
$pas2=$_POST["contraseña-nueva2"];

$sacar_pass="SELECT contrasena FROM usuarios WHERE username='$usuario'";
$pass=mysqli_query($db,$sacar_pass);
$row=mysqli_fetch_assoc($pass);


if($pas1==$pas2)
{
    $contraseña_nueva=(empty($pas1) && empty($pas2)) ? $row['contrasena']: md5($pas1);
    $sql="UPDATE usuarios set contrasena='$contraseña_nueva' where username='$usuario';";
    $ejecuta=$db->query($sql);
    header("Location: my-account.php");

}
else
{
    header('Location: alerta-contra.html');
}

?>
<?php
	
require("conectar-chat.php");
$msg=$_POST["mensaje_enviado"];
$primario=$_GET['usuario'];
$secundario=$_GET['secundario'];

$insert_sql="INSERT INTO mensajes (incoming_msg_id,outgoing_msg_id,msg) VALUES ('$primario','$secundario','$msg')";
$consulta=mysqli_query($db_chat,$insert_sql);

if($consulta)
{ 
	header("Location: ../system-chat.php");
}
else
{
	header('Location: ../error-404.html');
}
?>
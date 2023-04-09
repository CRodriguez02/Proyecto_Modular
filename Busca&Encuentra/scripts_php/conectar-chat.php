<?php
    $db_chat = mysqli_connect('localhost','root','123456','syschat');
    if(!$db_chat)
    {
        echo("Error de conexion en la base de datos de chat");
        exit;
    }
   



?>
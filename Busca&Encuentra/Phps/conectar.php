<?php //Ozmar en un maquina la contraseña es 123456
    $db = mysqli_connect('localhost','root','','sysbusca&encuentra');
    if(!$db)
    {
        echo("Error de conexion");
        exit;
    }
   echo ("Conexion correcta");



?>
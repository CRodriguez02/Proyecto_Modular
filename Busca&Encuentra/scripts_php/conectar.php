<?php //Ozmar en maquina windows maquina la contraseña es 123456
    $db = mysqli_connect('localhost','root','123456','sysbusca&encuentra');
    if(!$db)
    {
        echo("Error de conexion");
        exit;
    }
   echo ("Conexion correcta");



?>
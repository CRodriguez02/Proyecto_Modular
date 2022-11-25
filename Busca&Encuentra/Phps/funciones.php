<?php

function autenticado() : bool
{
    session_start();
    $autenticamos=$_SESSION['login'];
    if($autenticamos)
    {
        return true;

    }
    return false;
}



?>
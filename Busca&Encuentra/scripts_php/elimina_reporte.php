<?php

require("conectar.php");

$folio=$_GET['folio'];
$id_ob=$_GET['id_ob'];
$id_ma=$_GET['id_ma'];


if(!$id_ob==null)
{
    $sql="DELETE FROM objeto WHERE id='$id_ob'";
    $borra=$db->query($sql);
    if($borra)
    {
        $sql_folio="DELETE FROM reportes WHERE folio='$folio'";
        $borra_folio=$db->query($sql_folio);
        if($borra_folio)
        {
            header("Location: ../admin.php");
        }
        else
        {
            echo("Algo salió mal al borrar el folio del reporte");
        }
    }
    else
    {
        echo '<p>Algo salió mal al borrar el objeto del reporte: ' . $db->error . '</p>';
    }
        
}


if(!$id_ma==null)
{
    $sql="DELETE FROM mascotas WHERE id='$id_ma'";
    $borra=$db->query($sql);
    if($borra)
    {
        $sql_folio="DELETE FROM reportes WHERE folio='$folio'";
        $borra_folio=$db->query($sql_folio);
        if($borra_folio)
        {
            header("Location: ../admin.php");
        }
        else
        {
            echo("Algo salió mal al borrar folio del reporte");
        }
    }
    else
    {
        echo '<p>Algo salió mal al borrar la mascota del reporte: ' . $db->error . '</p>';
    }
}

/*$sirve=$_GET['id'];
//echo $sirve;
$sql="DELETE FROM reporte WHERE folio=$sirve";
$borra=$db->query($sql);
if($borra)
{
    header("Location: ../admin.php");
}*/


?>
<?php
function ObtenerServicios()
{
    try {

        //Sentencia sql
        require "conectar.php";//llamamos a la funcion(archivo) para conectar la bd
       

        $select= "SELECT * FROM administradores;";
        $consultar= mysqli_query($db,$select);//funciona asi: mysqli_query(conexion,sentenci SQL)

        //resultados
        //$resultado=mysqli_fetch_assoc($consultar);

        while($row=mysqli_fetch_assoc($consultar))
        {
            echo "<pre>";
            var_dump($row);
            echo "</pre>";
        }

       
       

    } 
    catch (\Throwable $th) 
    {
        var_dump($th);
    }
}

function Pasar_de_singup()
{
    require "conectar.php";//llamamos a la funcion(archivo) para conectar la bd
       

}


ObtenerServicios();

?>
<?php
	error_reporting(0);
	require("conectar.php");
	$correo_elec=$_POST["correo_elec"];
	$password=$_POST["password"];

	$iniciar_sesion="SELECT * FROM usuarios WHERE correo='$correo_elec'";
	$valida_sesion=$db->query($iniciar_sesion);

	if($valida_sesion->num_rows>0)
	{
		header('Location: http://localhost/Proyecto_Modular/Busca&Encuentra/index.html');
	}
	else
	{
		echo("Error");
	}


?>
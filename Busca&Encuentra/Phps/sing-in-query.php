<?php
	
	require("conectar.php");
	$correo_elec=$_POST["correo_elec"];
	$password=$_POST["password"];

	$iniciar_sesion="SELECT * FROM usuarios WHERE correo='$correo_elec' and contrasena='$password'";

	$valida_sesion=$db->query($iniciar_sesion);
	$usuario=mysqli_fetch_assoc($valida_sesion);// traigo los valores de a tabla como arreglo / esta es la tabla
		

	if($valida_sesion->num_rows>0)
	{
		//el ususario esta autenticado
		session_start();

		$_SESSION['usuario']=$usuario['username'];
		$_SESSION['login']=true;


		print("sesion iniciada");
		//header('Location: http://localhost/Proyecto_Modular/Busca&Encuentra/index.html');
	}
	else
	{
		echo("Error");
	}


?>
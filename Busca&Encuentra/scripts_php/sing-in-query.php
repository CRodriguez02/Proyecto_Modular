<?php
	
	require("conectar.php");
	$correo_elec=$_POST["correo_elec"];
	$password=$_POST["password"];

	$nueva_contraseña= md5($password);//encriptamos
	$iniciar_sesion="SELECT * FROM usuarios WHERE correo='$correo_elec' or username='$correo_elec' and contrasena='$nueva_contraseña'";

	$valida_sesion=$db->query($iniciar_sesion);
	$usuario=mysqli_fetch_assoc($valida_sesion);// traigo los valores de a tabla como arreglo / esta es la tabla
		
	if($valida_sesion->num_rows>0)
	{
		//el ususario esta autenticado
		session_start();
		$_SESSION['usuario']=$usuario['username']; 
		$_SESSION['login']=true;

		header('Location: ../index.php');
	}
	else
	{
		$nueva_contraseña= md5($password);//encriptamos
		$iniciar_sesion="SELECT * FROM administradores WHERE correo='$correo_elec' or username='$correo_elec' and contrasena='$nueva_contraseña'";
		$valida_sesion=$db->query($iniciar_sesion);
		$usuario=mysqli_fetch_assoc($valida_sesion);
		if($valida_sesion->num_rows>0)
		{
			//el ususario esta autenticado
			session_start();
			$_SESSION['usuario']=$usuario['username']; 
			$_SESSION['login']=true;

			header('Location: ../admin.php');
		}
		else
		{
			header('Location: ../alerta-inicio_de_sesion.html');
		}
		
	}


?>
<?php
try{
	$base=new PDO("mysql:host=localhost; dbname=sysbusca&encuentra","root","123456");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM alumno WHERE Codigo= :txtusuario AND Nip= :txtpassword";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["txtusuario"]));
	$password=htmlentities(addslashes($_POST["txtpassword"]));
	$resultado->bindValue(":txtusuario",$login);
	$resultado->bindValue(":txtpassword",$password);
	$resultado->execute();
	$numero_registro=$resultado->rowCount();
	if($numero_registro!=0){
		//echo "<h2>BIENVENIDO</h2>";
		session_start(); //Iniciar sesión del usuario.
		$_SESSION["usuario"]=$_POST["txtusuario"];
		header("location:formulario.php");
	}else{
		echo '<script language="javascript">alert("Error en algun campo ya sea el NIP o el Código.");window.location.href="index.html"</script>';//header("location:index.html");
	}
}catch(Exception $e){
	die("Error: " . $e->getMessage());
}

?>
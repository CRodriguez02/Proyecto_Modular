<?php
error_reporting(0);
require("conectar.php");
session_start();
$_SESSION['usuario'];
//7 campos||   username,correo,nombre,apellido_patern,apellido_materno,contrasena,imagen;

$username=$_SESSION['usuario'];//llave forane
//ID
$titulo=$_POST["txt_titulo"];
$descripcion=$_POST["txt_descripcion"];
$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
//OBJETO ENCONTRADO O NO
$especie=$_POST["especie_mascota"];
$raza=$_POST["raza_mascota"];
$recompensa=$_POST["recompensa"];
$estado=$_POST["motivo"];
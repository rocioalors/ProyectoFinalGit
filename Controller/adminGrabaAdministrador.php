<?php 
session_start();
require_once '../Model/Administrador.php';
//inserta el usuario en la base de datos
$adminAux = new Administrador($_POST['usuario'],$_POST['contraseña'],$_POST['dni'],$_POST['email'],$_POST['telefono']);
$adminAux->insert();
header("Location: adminVerAdministradores.php");

 ?>
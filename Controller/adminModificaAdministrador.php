<?php 
session_start();
include'boostrap.php';
$destino='adminActualizarAdministrador.php';
$usuario=$_REQUEST['usuario'];
$dni=$_REQUEST['dni'];
$contraseña=$_REQUEST['contraseña'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
include '../View/formularioAdminNuevoAdministrador.php';
 ?>
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

$destino='adminActualizarAdministrador.php';
$usuario=$_REQUEST['usuario'];
$dni=$_REQUEST['dni'];
$contraseña=$_REQUEST['contraseña'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];

include '../View/formularioAdminModificaAdministrador.php';
}else{
 header('Location: index.php');
}
}
 ?>

<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

$destino="adminActualizarUsuario.php";
$nombre=$_REQUEST['nombre'];
$id=$_REQUEST['id'];
$dni=$_REQUEST['dni'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$cp=$_REQUEST['cp'];
$telefono=$_REQUEST['telefono'];
$contraseña=$_REQUEST['contraseña'];


include "../View/formularioAdminNuevoUsuario.php";
}else{
	 header('Location: index.php');
}
}

 ?>

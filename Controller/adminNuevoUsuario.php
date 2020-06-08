<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){


$destino="adminGrabaUsuario.php";
$nombre="";
$dni="";
$correo="";
$direccion="";
$telefono="";
$cp='';
$contraseña="";

include "../View/formularioAdminNuevoUsuario.php";
}else{
	 header('Location: index.php');
}
}
 ?>
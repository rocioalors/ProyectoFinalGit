<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once'../Model/Administrador.php';

$administradorAux = new Administrador($_REQUEST['usuario'], $_REQUEST['contraseña'],$_REQUEST['dni'],$_REQUEST['email'],$_REQUEST['telefono']);
$administradorAux->update();


 header("location: adminVerAdministradores.php");
}else{
	 header('Location: index.php');
}
}

 ?>

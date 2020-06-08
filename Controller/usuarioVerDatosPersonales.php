<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require '../Model/Usuario.php';
$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);

include '../View/usuarioVerDatosPersonales.php';
}else{
	 header('Location: index.php');
}
}
 ?>
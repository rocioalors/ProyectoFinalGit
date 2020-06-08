<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){


$destino='adminGrabaAdministrador.php';
$usuario='';
$dni='';
$contraseña='';
$email='';
$telefono='';


include '../View/formularioAdminNuevoAdministrador.php';
}else{
	 header('Location: index.php');
}
}

 ?>

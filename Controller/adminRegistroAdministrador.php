<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

$destino="adminGrabaAdministrador.php";
$usuario='';
$contraseña='';
$dni='';
$email='';
$telefono='';


include "../View/formularioAdminNuevoAdmnistrador.php";
}else{
 header('Location: index.php');
 }
}
?>
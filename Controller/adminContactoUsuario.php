<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Usuario.php';

 
 $usuAux=new Usuario($_REQUEST['usuario']);

 $usuAux=Usuario::getUsuarioByNombre($_REQUEST['usuario']);


 include '../View/adminVerContacto.php';
}else{
 header('Location: index.php');
 }
}
?>
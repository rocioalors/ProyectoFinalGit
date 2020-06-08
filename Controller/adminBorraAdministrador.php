<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Administrador.php';

$adminAux=new Administrador();
//print_r($adminAux);
$adminAux->delete($_REQUEST['dni']);
header("Location:adminVerAdministradores.php");
}else{
 header('Location: index.php');
}
}
 ?>

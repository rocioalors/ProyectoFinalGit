<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){
include '../View/vErrorGrabaUsuario.php';
}else{
	header('Location: index.php');
}
}
 ?>
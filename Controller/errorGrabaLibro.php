<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){
include '../View/vErrorGrabaLibro.php';
}else{
		header('Location: index.php');
}
}
?>
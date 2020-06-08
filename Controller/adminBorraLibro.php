<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){
		
require_once '../Model/Libro.php';
$libroAux=Libro::getLibroByid($_REQUEST['id']);
if($libroAux->getEstado()=='Habilitado'){
	$libroAux->Deshabilitar($_REQUEST['id']);
}
if($libroAux->getEstado()=='Deshabilitado'){
	$libroAux->Habilitar($_REQUEST['id']);
}

header("Location:verCatalogo.php");

}else{
	 header('Location: index.php');
}
}

 ?>
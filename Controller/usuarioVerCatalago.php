<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Libro.php';


$data['lista']=Libro::getLibro();

include '../View/vUsuarioVerCatalogo.php';
}else{
	 header('Location: index.php');
}

}
 ?>
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once('../Model/Libro.php');

 
 $data['libro']=Libro::getLibro();


 include '../View/vCatalgo.php';
}else{
	 header('Location: index.php');
}
}
 ?>


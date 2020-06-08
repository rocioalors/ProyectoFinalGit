<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){
require_once '../Model/Libro.php';

 $libroAux = new Libro($_POST['id'],$_FILES["imagen"]["name"], $_POST['titulo'],$_POST['autor'],$_POST['descripcion'],$_POST['precio'],$_POST['cantAlquiler'],$_POST['cantVender'],$_POST['genero'],$_POST['edicion'],$_POST['estado']);
 $libroAux->update();

 header("location:verCatalogo.php");
}else{
	 header('Location: index.php');
}
}
 ?>
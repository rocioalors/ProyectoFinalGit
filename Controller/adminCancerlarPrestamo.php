<?php 
session_start();

if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Libro.php';
require_once '../Model/Prestamo.php';

$libroAux=new Libro($_REQUEST['id_libro']);
$prestamoAux=new Prestamo($_REQUEST['id']);
//Devolvemos el libro y se vuelve a sumar 1
$libroAux->devolver($_REQUEST['id_libro']);
//Lo eliminamos de la tabla préstamos
$prestamoAux->delete();
header("Location:adminVerPrestamos.php");

}else{
	 header('Location: index.php');
}
}

 ?>
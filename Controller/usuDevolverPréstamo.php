<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Libro.php';
require_once '../Model/Prestamo.php';

//echo 'id'.$_REQUEST['id'];

$libroAux=new Libro($_REQUEST['id_libro']);
$prestamoAux=new Prestamo($_REQUEST['id']);

$libroAux->devolver($_REQUEST['id_libro']);
$prestamoAux->delete();
 echo ' Préstamo borrado';
}else{
	 header('Location: index.php');
}
}
?>
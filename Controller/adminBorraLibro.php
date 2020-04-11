<?php 
require_once '../Model/Libro.php';
$libroAux=new Libro($_REQUEST['id']);
$libroAux->delete();
header("Location:verCatalogo.php");
 ?>
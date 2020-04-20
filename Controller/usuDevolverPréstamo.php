<?php 
session_start();
require_once '../Model/Libro.php';
require_once '../Model/Prestamo.php';

$libroAux=new Libro($_REQUEST['titulo']);
$prestamoAux=new Prestamo($_REQUEST['id']);

$libroAux->devolver($_REQUEST['titulo']);
$prestamoAux->delete();
header("Location:usuarioVerPerfil.php");
 ?>
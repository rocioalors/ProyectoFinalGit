<?php 
include '../Model/Libro.php';
include 'boostrap.php';
echo $_REQUEST['id'];
$data['libro']=Libro::getLibroById($_REQUEST['id']);
include '../View/vistaDetalle.php';
 ?>
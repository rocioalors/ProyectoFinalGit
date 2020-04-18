<?php 
session_start();
include '../Model/Libro.php';
include '../Controller/boostrap.php';

$data['lista']=Libro::getLibro();

include '../View/vUsuarioVerCatalodo.php';


 ?>
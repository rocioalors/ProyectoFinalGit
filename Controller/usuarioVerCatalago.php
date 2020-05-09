<?php 
session_start();
require_once '../Model/Libro.php';
include '../Controller/boostrap.php';



$data['lista']=Libro::getLibro();


include '../View/vUsuarioVerCatalogo.php';


 ?>
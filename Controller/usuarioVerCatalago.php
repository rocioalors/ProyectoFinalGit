<?php 
session_start();
require_once '../Model/Libro.php';




$data['lista']=Libro::getLibro();

include '../View/boostrap.php';
include '../View/vUsuarioVerCatalogo.php';


 ?>
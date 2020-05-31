<?php 
session_start();
require_once('../Model/Libro.php');

 
 $data['libro']=Libro::getLibro();



 include '../View/boostrap.php';
 include '../View/vCatalgo.php';
 ?>

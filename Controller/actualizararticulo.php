<?php 
session_start();
include'../Model/Libro.php';

 $libroAux = new Libro($_POST['id'],$_FILES["imagen"]["name"], $_POST['titulo'],$_POST['autor'],$_POST['descripcion'],$_POST['precio'],$_POST['cantAlquiler'],$_POST['cantVender'],$_POST['genero'],$_POST['edicion']);
 $libroAux->update();

 header("location:verCatalogo.php");
 ?>
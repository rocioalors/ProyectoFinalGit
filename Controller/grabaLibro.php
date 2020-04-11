<?php 
require_once '../Model/Libro.php';

// sube la imagen al servidor
   move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/img/" . $_FILES["imagen"]["name"]);


  // inserta el libro en la base de datos
  $libroAux = new Libro("",$_FILES["imagen"]["name"], $_POST['titulo'],$_POST['autor'],$_POST['descripcion'],$_POST['precio'],$_POST['cantAlquiler'],$_POST['cantVender'],$_POST['genero']);
  $libroAux->insert();
  header("Location: verCatalogo.php");

 ?>
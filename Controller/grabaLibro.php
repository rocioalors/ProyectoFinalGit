<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Libro.php';
//Comprobamos que no exista ese libro
$total=Libro::getComprobar($_REQUEST['titulo'],$_REQUEST['autor'],$_REQUEST['edicion']);
if($total==1){
	 header('Location: errorGrabaLibro.php');
}else{
// sube la imagen al servidor
   move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/img/" . $_FILES["imagen"]["name"]);


  // inserta el libro en la base de datos
  $libroAux = new Libro("",$_FILES["imagen"]["name"], $_POST['titulo'],$_POST['autor'],$_POST['descripcion'],$_POST['precio'],$_POST['cantAlquiler'],$_POST['cantVender'],$_POST['genero'],$_POST['edicion'],$_POST['estado']);
  $libroAux->insert();
  header("Location: verCatalogo.php");
 }
}else{
	 header('Location: index.php');
}
}
 ?>
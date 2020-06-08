<?php 
session_start();
if(isset($_SESSION['usuario'])){
  if($_SESSION['usuario']=='administrador'){
require_once '../Model/Administrador.php';
//inserta el usuario en la base de datos
$adminAux = new Administrador($_POST['usuario'],$_POST['contraseña'],$_POST['dni'],$_POST['email'],$_POST['telefono']);
$adminAux->insert();
header("Location: adminVerAdministradores.php");
}else{
	 header('Location: index.php');
}
}
 ?>
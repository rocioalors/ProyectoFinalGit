<?php 
session_start();
if(isset($_SESSION['usuario'])){
if($_SESSION['usuario']=='administrador'){

require_once '../Model/Usuario.php';
//Compruebo que no exista usuarios con esos datos al igual que hago en el formulario de registro
$total=Usuario::getComprobarDni($_REQUEST['dni']);
$totalDos=Usuario::getComprobarCorreo($_REQUEST['correo']);
$totalTres=Usuario::getComprobarUsuario($_REQUEST['nombre']);
	
if($total==0 && $totalDos==0 && $totalTres==0){

  // inserta el usuario en la base de datos
  $usuarioAux = new Usuario("",$_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
  $usuarioAux->insert();
  header("Location: verUsuarios.php");
}else{
  header('Location: errorGrabaUsuario.php');	
}
}else{
	 header('Location: index.php');

}
}
?>
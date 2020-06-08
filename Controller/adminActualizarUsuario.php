<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once'../Model/Usuario.php';

 $usuarioAux = new Usuario($_POST['id'], $_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
 $usuarioAux->update();

 header("location: verUsuarios.php");
}else{
	 header('Location: index.php');
}
}
 ?>
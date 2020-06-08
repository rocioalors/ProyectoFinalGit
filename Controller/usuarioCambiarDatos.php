<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Usuario.php';

$usuAux=new Usuario($_REQUEST['id'],$_REQUEST['nombre'],$_REQUEST['dni'],$_REQUEST['correo'],$_REQUEST['direccion'],$_REQUEST['cp'],$_REQUEST['telefono'],$_REQUEST['contraseña']);
$usuAux->update();

header ('Location:usuarioVerDatosPersonales.php');
}else{
	 header('Location: index.php');
}
}
 ?>
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once('../Model/Usuario.php');

 $data['usuarios']=Usuario::getUsuario();


 include '../View/vAdminListadoUsuario.php';
}else{
 header('Location: index.php');
}
}

 ?>


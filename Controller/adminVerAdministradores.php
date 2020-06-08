<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once('../Model/Administrador.php');



 $data['administradores']=Administrador::getAdministrador();


 
 include '../View/vAdminVerAdministradores.php';
}else{
	 header('Location: index.php');
}
}
 ?>


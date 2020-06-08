<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

 include '../View/usuRealizarPago.php';
}else{
	 header('Location: index.php');
}
}
 ?>
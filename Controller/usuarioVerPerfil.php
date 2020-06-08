<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Usuario.php';
require_once '../Model/Prestamo.php';
require_once '../Model/Venta.php';
$data['prestamofueraplazo']=Prestamo::getFueraPlazo($_SESSION['user']);


$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);
$data['prestamos']=Prestamo::getPrestamoByUsuario($_SESSION['user']);
$data['compras']=Venta::ventasPorUsuario($_SESSION['user']);
$_SESSION['todosPrestamos']=sizeof($data['prestamos']);
$_SESSION['comprasTotales']=sizeof($data['compras']);
$_SESSION['fueraplazo']=sizeof($data['prestamofueraplazo']);

 include '../View/vUsuarioVerPerfil.php';
}else{
	 header('Location: index.php');

}
}
?>
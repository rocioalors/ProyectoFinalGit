<?php 
session_start();
if($_SESSION['usuario']){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';

//$id=$_REQUEST['id'];
$ventas=Detalle_Venta::detalleVenta($_REQUEST['id']);


include '../View/vDetalle_Venta.php';
}else{
 header('Location: index.php');
 }
}
?>
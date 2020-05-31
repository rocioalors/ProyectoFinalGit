<?php 
session_start();
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';

//$id=$_REQUEST['id'];
$ventas=Detalle_Venta::detalleVenta($_REQUEST['id']);

include'../View/boostrap.php';
include '../View/vDetalle_Venta.php';
 ?>
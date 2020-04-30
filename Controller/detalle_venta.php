<?php 
session_start();
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
include 'boostrap.php';
$ventas=Detalle_Venta::detalleVenta($_REQUEST['id']);
include '../View/vDetalle_Venta.php';
 ?>
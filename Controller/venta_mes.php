<?php 
session_start();
//echo $_REQUEST['mes'];

require_once '../Model/Venta.php';
include 'boostrap.php';
$ventaMes=Venta::mesDeterminado($_REQUEST['mes']);

include '../View/vista_venta_mes.php';
 ?>
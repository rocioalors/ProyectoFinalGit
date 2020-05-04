<?php 
session_start();
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';

if(isset($_REQUEST['datos'])){
 if($_REQUEST['datos']=='todas'){
   
   $datos=Venta::getVentas();
   echo $datos;
   
 }
 if($_REQUEST['datos']=='meses'){
 	$datos=Venta::meses();
 	echo $datos;
 }
 
 if($_REQUEST['datos']=='gmensual'){
 	$datos=Venta::meses();
 	echo $datos;

}
}
<?php
session_start();
require_once '../Model/Libro.php';
require_once '../Model/Detalle_Venta.php';
$VentaAux=Detalle_Venta::tresLibrosMasVendidos();
$_SESSION['envio']=0;

if($_SESSION['subtotal']<=19){
	$_SESSION['envio']=2.95;
}

//Sugerencia tres libros más vendidos



include '../View/verContenidoCesta.php';



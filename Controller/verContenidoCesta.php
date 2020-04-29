<?php
session_start();
require_once '../Model/Libro.php';
require_once '../Model/Detalle_Venta.php';
include 'boostrap.php';
$VentaAux=Detalle_Venta::tresLibrosMasVendidos();
$envio=0;

if($_SESSION['subtotal']<=19){
	$envio=2.95;
}

//Sugerencia tres libros más vendidos



include '../View/verContenidoCesta.php';



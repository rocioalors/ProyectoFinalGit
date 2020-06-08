<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Libro.php';
require_once '../Model/Detalle_Venta.php';
//Sugerencia de los tres libros más vendidos
$VentaAux=Detalle_Venta::tresLibrosMasVendidos();
$_SESSION['envio']=0;

if($_SESSION['subtotal']<=19){
	$_SESSION['envio']=2.95;
}


include '../View/verContenidoCesta.php';
}else{
	 header('Location: index.php');
}

}
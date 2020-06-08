<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require '../Model/Detalle_Venta.php';
require '../Model/Libro.php';

$ventaAux=Detalle_Venta::LibrosMasVendidos();
$data['lista']=Libro::novedades();


include '../View/usuVerMasVendidos.php';
}else{
	 header('Location: index.php');
}
}

 ?>
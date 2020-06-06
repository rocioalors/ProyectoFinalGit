<?php 
session_start();
require '../Model/Detalle_Venta.php';
require '../Model/Libro.php';

$ventaAux=Detalle_Venta::LibrosMasVendidos();
$data['lista']=Libro::novedades();


include '../View/usuVerMasVendidos.php';


 ?>
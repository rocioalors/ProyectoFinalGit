<?php 
session_start();
require '../Model/Detalle_Venta.php';
require '../Model/Libro.php';

$ventaAux=Detalle_Venta::LibrosMasVendidos();

include '../View/usuVerMasVendidos.php';


 ?>
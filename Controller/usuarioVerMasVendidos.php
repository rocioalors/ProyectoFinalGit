<?php 
session_start();
require '../Model/Detalle_Venta.php';
require '../Model/Libro.php';

$ventaAux=Detalle_Venta::DiezLibrosMasVendidos();

include '../View/usuVerMasVendidos.php';


 ?>
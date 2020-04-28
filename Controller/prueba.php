<?php 
require_once '../Model/Venta.php';

$Ventaaux=Venta::meses();
print_r($Ventaaux);
 ?>
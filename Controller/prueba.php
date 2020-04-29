<?php 
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Libro.php';

$Ventaaux=Detalle_Venta::tresLibrosMasVendidos();
//$datos=json_decode($Ventaaux);
print_r($Ventaaux);

echo '<br><br>';
foreach ($Ventaaux as $key => $value) {
	
	echo $value['id_libro'].' tiene '.$value['cantidad'].'<br>';

}
echo '<br><br>';
$id=1;
$ventas=Detalle_Venta::detalleVenta($id);
print_r($ventas);

 ?>

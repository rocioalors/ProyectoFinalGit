
<?php 
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Libro.php';

$Ventaaux=Detalle_Venta::DiezLibrosMasVendidos();
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


echo '<br><br>';

$ventaMes=Venta::mesDeterminado(4);
if($ventaMes==Null){
	echo 'no';
}
print_r($ventaMes);
foreach ($ventaMes as $key) {
	echo $key->getId().'<br>';
	echo $key->getUsuario().'<br>';
	echo $key->getfechacompra().'<br>';

}
$data=Venta::meses();
$datos=json_decode($data);
foreach ($datos as $key) {
	echo $key->mes;
}

$ventaUser=Venta::ventasPorUsuario('@javier');
echo '<br><br>';
print_r($ventaUser);
?>

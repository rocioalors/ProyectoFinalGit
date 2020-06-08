<?php  
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Usuario.php';

$venta=Detalle_Venta::detalleVenta($_REQUEST['id_venta']);
$usuario=Usuario::getUsuarioByNombre($_REQUEST['usuario']);
//print_r($venta);


date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$date= strftime("%d de %B del %Y", strtotime($_REQUEST['fecha']));
if($_REQUEST['total']>19){
	$envio=0;
}else{
	$envio=2.95;
}

$IVA= round($_REQUEST['total']*0.04,2);


include '../View/usuarioVerDetalleCompra.php';
}else{
	 header('Location: index.php');
}
}
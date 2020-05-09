
<?php  
session_start();
require_once '../Model/Venta.php';

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$compras=Venta::ventasPorUsuario($_SESSION['user']);
/*foreach ($compras as $key) {
	$fecha=$key->getFechacompra();
	
	$date= strftime("%d de %B del %Y", strtotime($fecha));
	echo $date;
	
}*/


 include '../View/usuarioVerCompras.php';

<?php  
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){

require_once '../Model/Venta.php';

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$data['compras']=Venta::ventasPorUsuario($_SESSION['user']);

 include '../View/usuarioVerCompras.php';
}else{
	 header('Location: index.php');
}
}
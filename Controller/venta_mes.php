<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once '../Model/Venta.php';
//echo $_REQUEST['mes'];

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');



$ventaMes=Venta::mesDeterminado($_REQUEST['mes']);
$mes= strftime("%B", strtotime($_REQUEST['mes']));


include '../View/vista_venta_mes.php';
}else{
	 header('Location: index.php');
}
}
 ?>
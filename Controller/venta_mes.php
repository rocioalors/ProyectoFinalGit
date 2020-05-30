<?php 
session_start();
//echo $_REQUEST['mes'];

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

require_once '../Model/Venta.php';
include 'boostrap.php';
$ventaMes=Venta::mesDeterminado($_REQUEST['mes']);

include '../View/vista_venta_mes.php';
 ?>
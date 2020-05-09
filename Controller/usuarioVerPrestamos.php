<?php 
session_start();
require_once '../Model/Usuario.php';
require_once '../Model/Prestamo.php';
require_once '../Model/Venta.php';

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$data['prestamofueraplazo']=Prestamo::getFueraPlazo($_SESSION['user']);
$data['prestamos']=Prestamo::getPrestamoByUsuario($_SESSION['user']);


include '../View/usuarioVerPrestamos.php';

 ?>
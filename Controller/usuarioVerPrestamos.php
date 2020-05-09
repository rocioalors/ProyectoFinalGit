<?php 
session_start();
require_once '../Model/Usuario.php';
require_once '../Model/Prestamo.php';
require_once '../Model/Venta.php';

$data['prestamofueraplazo']=Prestamo::getFueraPlazo($_SESSION['user']);
$data['prestamos']=Prestamo::getPrestamoByUsuario($_SESSION['user']);


include '../View/usuarioVerPrestamos.php';

 ?>
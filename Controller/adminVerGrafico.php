<?php 
session_start();
require_once '../Model/Venta.php';


$data=Venta::meses();
$datos=json_decode($data);
include 'boostrap.php';
include '../View/vAdminVerGrafica.php';
 ?>
<?php 
session_start();
require_once '../Model/Administrador.php';

$adminAux=new Administrador();
//print_r($adminAux);
$adminAux->delete($_REQUEST['dni']);
header("Location:adminVerAdministradores.php");
 ?>
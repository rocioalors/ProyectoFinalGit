<?php 
session_start();
include '../Model/Usuario.php';
include '../Model/Prestamo.php';
include 'boostrap.php';
$data['prestamofueraplazo']=Prestamo::getFueraPlazo($_SESSION['user']);
$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);
$data['prestamos']=Prestamo::getPrestamoByUsuario($_SESSION['user']);
 
 if(sizeof($data['prestamofueraplazo'])>0){
 	$_SESSION['fueraplazo']=sizeof($data['prestamofueraplazo']);
 }else{
 	$_SESSION['fueraplazo']=0;
 }

 include '../View/vUsuarioVerPerfil.php';
 ?>
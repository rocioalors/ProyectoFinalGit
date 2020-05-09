<?php 
session_start();
require '../Model/Usuario.php';
$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);



include '../View/usuarioVerDatosPersonales.php';

 ?>
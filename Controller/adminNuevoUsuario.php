<?php 
session_start();
include "boostrap.php";
$destino="adminGrabaUsuario.php";
$nombre="";
$dni="";
$correo="";
$direccion="";
$telefono="";
$cp='';
$contraseña="";
include "../View/formularioAdminNuevoUsuario.php";
 ?>
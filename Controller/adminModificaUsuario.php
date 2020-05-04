<?php 
session_start();
include "boostrap.php";

$destino="adminActualizarUsuario.php";
$nombre=$_REQUEST['nombre'];
$id=$_REQUEST['id'];
$dni=$_REQUEST['dni'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$cp=$_REQUEST['cp'];
$telefono=$_REQUEST['telefono'];
$contraseña=$_REQUEST['contraseña'];
include "../View/formularioAdminNuevoUsuario.php";
 ?>
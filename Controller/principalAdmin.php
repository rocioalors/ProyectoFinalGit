<?php 
session_start();
require_once'../Model/Usuario.php';
require_once '../Model/Libro.php';
require_once '../Model/Prestamo.php';
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

//Para ver el total de usuarios registrados
$usuario=Usuario::getUsuario();
$usuarios=sizeof($usuario);
//Total de libros registrados
$libro=Libro::getLibro();
$libros=sizeof($libro);
//Total de prestamos activos
$prestamo=Prestamo::getPrestamos();
$prestamos=sizeof($prestamo);

//Total de prestamos fuera de plazo
$fueraPlazo=Prestamo::getTodosLosFueraPlazo();
$fueraPlazos=sizeof($fueraPlazo);

//Si aún no he recibido ninguna visita inicio la cokkie a 0;
if(!isset($_COOKIE['contador'])){
	setcookie('contador',0,time()+365*24*60*60);
}

//Cookie que establece los descuentos dura una 4 días
if (isset($_POST["descuento"])) {
$descuento = $_POST["descuento"];
$token = $_POST["token"];
setcookie("descuento", $descuento, time() + 4*24*3600);
setcookie("token", $token, time() + 4*24*3600);
} else if (isset($_COOKIE["descuento"])) {
$descuento = $_COOKIE["descuento"];
$token = $_COOKIE["token"];
}
// Borrado de cookies y variables
if (isset($_POST["borraCookies"])) {
setcookie("descuento", NULL, -1);
setcookie("token", NULL, -1);
unset($descuento);
unset($token);
}

include '../View/vPrincipalAdmin.php';
}else{
	 header('Location: index.php');
}
}

 ?>
<?php 
session_start();
//echo 'hola '.$_SESSION['user'];
// si no inicialializco los valores
if (!isset($_SESSION['enCesta'])) {
    $_SESSION['enCesta'] = [];
    $_SESSION['subtotal'] = 0;
    $_SESSION['cantidad'] = 0;
}


include '../View/vPrincipalUsuario.php';
 ?>
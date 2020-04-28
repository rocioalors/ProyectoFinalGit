<?php 
session_start();

include '../View/JS/funciones.js';
if(empty($_REQUEST['contraseña'])||$_REQUEST['contraseña']!='ventas1234'){
$_SESSION['acceso']='denegado';
echo '<span style="font-weight:bold;color: red;">Contraseña incorrecta. Acceso denegado</span>';
}

if($_REQUEST['contraseña']=='ventas1234'){
echo '<script>location.href = "adminVerVentas.php"</script>';
$_SESSION['acceso']='ok';
}
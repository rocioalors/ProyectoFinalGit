<?php 
session_start();

//include '../View/JS/funciones.js';
if(empty($_REQUEST['contraseña'])||$_REQUEST['contraseña']!='ventas1234'){
$_SESSION['acceso']='denegado';
echo '0';

}

if($_REQUEST['contraseña']=='ventas1234'){
	$_SESSION['acceso']='ok';
echo '1';


}
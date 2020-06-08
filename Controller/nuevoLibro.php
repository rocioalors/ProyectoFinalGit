<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){


$destino="grabaLibro.php";
$titulo="";
$autor="";
$descripcion="";
$precio="";
$cantidadalquiler="";
$cantidadvender="";
$genero="";

include "../View/formularioAdminNuevoLibro.php";
}else{
	 header('Location: index.php');
}
}
 ?>
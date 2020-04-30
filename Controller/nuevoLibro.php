<?php 
session_start();
include "boostrap.php";
$destino="grabaLibro.php";
$titulo="";
$autor="";
$descripcion="";
$precio="";
$cantidadalquiler="";
$cantidadvender="";
$genero="";
include "../View/formularioAdminNuevoLibro.php";
 ?>
<?php 
session_start();
include'boostrap.php';

$destino='actualizararticulo.php';
$id=$_REQUEST['id'];
$titulo=$_REQUEST['titulo'];
$autor=$_REQUEST['autor'];
$descripcion=$_REQUEST['descripcion'];
$precio=$_REQUEST['precio'];
$cantidadalquiler=$_REQUEST['cantAlquiler'];
$cantidadvender=$_REQUEST['cantvender'];
$genero=$_REQUEST['genero'];
include '../View/formularioAdminModificarLibro.php';

 ?>
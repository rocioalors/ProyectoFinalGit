<?php 
session_start();


$destino='actualizararticulo.php';
$id=$_REQUEST['id'];
$titulo=$_REQUEST['titulo'];
$autor=$_REQUEST['autor'];
$descripcion=$_REQUEST['descripcion'];
$precio=$_REQUEST['precio'];
$cantidadalquiler=$_REQUEST['cantAlquiler'];
$cantidadvender=$_REQUEST['cantvender'];
$genero=$_REQUEST['genero'];
$edicion=$_REQUEST['edicion'];
$estado=$_REQUEST['estado'];
if(isset($_REQUEST['estado'])){
	if($_REQUEST['estado']=='Habilitado'){
		$estadoDos='Deshabilitado';
	}else{
		$estadoDos='Habilitado';
	}
}

include '../View/boostrap.php';
include '../View/formularioAdminModificarLibro.php';

 ?>
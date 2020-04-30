<?php 
session_start();
require_once('../Model/Libro.php');
include '../View/JS/funciones.js';
include '../Controller/boostrap.php';

 /*$boton=$_REQUEST['search'];
 if($boton==='search'){
 	$valor=$_REQUEST['search'];
 	$insta=new librito();
	$result=$insta->listar_libros($valor);
//print_r($result);
	echo json_encode($result);
 }*/
 
 $data['libro']=Libro::getLibro();
 
 include '../View/vCatalgo.php';
 ?>

<?php
session_start();
require_once '../Model/Libro.php';
$envio=0;

if($_SESSION['subtotal']<=19){
	$envio=2.95;
}

/*//Muestra aleatorio de libro
$data['libro']=Libro::aleatorio();

foreach ($data['libro'] as $libro) {
	$lista=Libro::getLibroById($libro);
     echo $lista->getId();
     echo $lista->getTitulo();
	
}*/


include '../View/verContenidoCesta.php';



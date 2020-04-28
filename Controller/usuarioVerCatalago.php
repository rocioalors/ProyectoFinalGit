<?php 
session_start();
include '../Model/Libro.php';
include '../Controller/boostrap.php';
include '../View/JS/funciones.js';

$data['lista']=Libro::getLibro();


// si no inicialializco los valores
if (!isset($_SESSION['enCesta'])) {
    $_SESSION['enCesta'] = [];
    $_SESSION['subtotal'] = 0;
    $_SESSION['cantidad'] = 0;
}


include '../View/vUsuarioVerCatalodo.php';


 ?>
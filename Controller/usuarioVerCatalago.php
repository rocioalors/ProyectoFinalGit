<?php 
session_start();
include '../Model/Libro.php';
include '../Controller/boostrap.php';

$data['lista']=Libro::getLibro();

if (isset($_COOKIE['cesta'])) {
        $_SESSION['enCesta']=unserialize($_COOKIE['cesta']);
        $_SESSION['total']    = $_COOKIE['total'];
        $_SESSION['cantidad'] = $_COOKIE['cantidad'];
    }
// si no inicialializco los valores
if (!isset($_SESSION['enCesta'])) {
    $_SESSION['enCesta'] = [];
    $_SESSION['total'] = 0;
    $_SESSION['cantidad'] = 0;
}


include '../View/vUsuarioVerCatalodo.php';


 ?>
<?php 
session_start();
require_once '../Model/Libro.php';
//echo $_REQUEST['id'];
if (isset($_REQUEST['id'])) {
    $libro = $_REQUEST['id'];
     $libroaux=Libro::getLibroById($libro);
    if (array_key_exists($libro, $_SESSION['enCesta'])) {
        $_SESSION['enCesta'][$libro]++;
    }else{
        $_SESSION['enCesta'][$libro]=1;   
    }
    }
    $_SESSION['cantidad']++;
    $_SESSION['total'] += $libroaux->getPrecio();
    
    
header('Location:usuarioVerCatalago.php');
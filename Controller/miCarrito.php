<?php 
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']=='usuario'){

require_once '../Model/Libro.php';
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
    $_SESSION['subtotal'] += $libroaux->getPrecio();
  }else{
     header('Location: index.php');
  }  
}

<?php
session_start();
include '../Model/Libro.php';

if (isset($_GET['quitapro'])) {
    $prod = $_GET['quitapro'];
    $libroAux=Libro::getLibroById($prod);
    $_SESSION['enCesta'][$prod]--;
    if ($_SESSION['enCesta'][$prod]==0) {
        unset($_SESSION['enCesta'][$prod]);
    }
    $_SESSION['cantidad']--;
    $_SESSION['subtotal'] -= $libroAux->getPrecio();
 
}
header('Location:verContenidoCesta.php');